<?php
require 'database.php';
require 'includes.php';
 
/* DATABASE */
  
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  //die($e->getMessage());
  die('our doughs are working on this');
  exit();
}
  
/* FUNCTIONS */
  
function redirect($location) {
  header("Location: $location");
  die();
}
  
function getuser($id) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
  $stmt->execute(['id'=>$id]);
  $row = $stmt->fetch();
  if($row) {
    $row['id'] = htmlspecialchars(intval($row['id']));
    $row['username'] = htmlspecialchars(strip_tags($row['username']));
    return $row;
  }
  return false;
}
  
function getuserbyusername($usr) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :usr");
  $stmt->execute(['usr'=>$usr]);
  $row = $stmt->fetch();
  if($row) {
    $row['id'] = htmlspecialchars(intval($row['id']));
    $row['username'] = htmlspecialchars(strip_tags($row['username']));
    return $row;
  }
  return false;
}
  
function checkinvitekey($key) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM invitekeys WHERE invite = :key AND used = 0");
  $stmt->execute(['key'=>$key]);
  $row = $stmt->fetch();
  if($row) {
    $row['invite'] = htmlspecialchars(strip_tags($row['invite']));
    return $row;
  }
  return false;
}
  
function usekey($key) {
  global $pdo;
  $stmt = $pdo->prepare("UPDATE invitekeys SET used = 1 WHERE invite = :key");
  $stmt->execute(['key'=>$key]);
  if($stmt->execute()) {
    return true;
  }
  return false;
}
  
function checkip($ip) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM users WHERE ip = :ip");
  $stmt->execute(['ip'=>$ip]);
  $row = $stmt->fetch();
  if($row) {
    $row['ip'] = htmlspecialchars(strip_tags($row['ip']));
    return $row;
  }
  return false;  
}
  
function newplace($uid,$file,$time) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
  $stmt->execute(['id'=>$uid]);
  $user = $stmt->fetch();
  if($user) {
    $user['username'] = htmlspecialchars(strip_tags($user['username']));
    $name = $user['username'] . "'s Place";
    $stmt = $pdo->prepare("INSERT INTO places (name,uid,file,timestamp) VALUES (?,?,?,?)");
    if($stmt->execute([$name,$uid,$file,$time])) {
      return true;
    }
  }
  return false;
}
  
function render($id,$type) {
  global $pdo;
  $stmt = $pdo->prepare("INSERT INTO renders (aid,type,timestamp) VALUES (?,?,NOW())");
  if($stmt->execute([$id,$type])) {
    return true;
  }
  return false;
}
  
function unequip($id) {
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM wearing WHERE uid = :id");
  $stmt->execute(['id'=>$id]);
  if($stmt->execute()) {
    return true;
  }
  return false;  
}
  
function newbodycolors($uid,$time) {
  global $pdo;
  $head = 24;
  $leftarm = 24;
  $rightarm = 24;
  $torso = 23;
  $leftleg = 37;
  $rightleg = 37;
  $stmt = $pdo->prepare("INSERT INTO bodycolors (uid,head,leftarm,rightarm,torso,leftleg,rightleg,timestamp,updated) VALUES (?,?,?,?,?,?,?,?,?)");
  if($stmt->execute([$uid,$head,$leftarm,$rightarm,$torso,$leftleg,$rightleg,$time,$time])) {
    return true;
  }
  return false;
}
  
function isadmin() {
  global $myuser;
  if(isset($myuser)&&$myuser['admin']) {
    return true; 
  }
  return false;
}
  
function islogged() {
  global $pdo;
  if(isset($_SESSION['logon']) && isset($_SESSION['id']) && intval($_SESSION['id'] > 0)) {
    $myuser = getuser($_SESSION['id']);
    return true;
  }
  return false;
}
  
function isbanned($id) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM bans WHERE uid = :id");
  $stmt->execute(['id'=>$id]);
  $row = $stmt->fetch();
  if($row) {
    return $row;
  }
  return false;
}
  
function updateblurb($bio) {
  global $pdo;
  global $me;
  if(islogged()&&isset($me)) {
    $stmt = $pdo->prepare("UPDATE users SET bio = :bio WHERE id = :id");
    $stmt->execute(['bio'=>$bio,'id'=>$me['id']]);
    if($stmt->execute()) {
      return true;
    }
  }
  return false;
}
  
if(islogged()) {
  $me = getuser($_SESSION['id']);
  if(isbanned($me['id'])) {
    die('You were banned from accessing Blockland07');
    exit();
  }
}
  
function register($name,$password,$key,$ip) {
  global $pdo;
  $CharacterNameIn = trim($name);
  $PasswordIn = trim($password);
  $InviteKey = trim($key);
  if(empty($CharacterNameIn)||empty($PasswordIn)||empty($InviteKey)) {
    return false;
  }elseif(strlen($CharacterNameIn) < 3) {
    return false;
  }elseif(getuserbyusername($CharacterNameIn)) {
    return false;
  }elseif(checkinvitekey($InviteKey) == false) {
    return false;
  }elseif(checkip($ip)) { //anti alt
    return false;
  }else{
    if(usekey($InviteKey)) {
      return true;
    }
  }
}
  
function login($name,$password) {
  $CharacterNameIn = trim($name);
  $PasswordIn = trim($password);
  if(empty($CharacterNameIn)||empty($PasswordIn)) {
    return false;
  }elseif(getuserbyusername($CharacterNameIn) == false) {
    return false;
  }else $user = getuserbyusername($CharacterNameIn); if($user&&password_verify($PasswordIn,$user['password'])) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['logon'] = true;
    return true;
  }
}
  
function logout() {
  session_start();
  session_unset();
  session_destroy();
  return true;
}
  
function newestpeople() {
  global $pdo;
  $stmt = $pdo->query("SELECT id,username FROM users ORDER BY timestamp DESC LIMIT 5");
  $eusers = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($eusers as $user) {
    $user['id'] = htmlspecialchars(intval($user['id']));
    $user['username'] = htmlspecialchars(strip_tags($user['username']));
    return '<tr>
    <td style="font-family: Verdana, Sans-Serif;font-size: 12px;" align="center">
                        <p><a href="/User.aspx?id='.$user['id'].'">'.$user['username'].'</a></p>
                    </td>
  </tr>';
  }
}
  
function loadcatalog() {
  global $pdo;
  $stmt = $pdo->query("SELECT id,title,dough,offsale,thumbnail FROM catalog ORDER BY timestamp DESC");
  $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($items as $item) {
    $item['id'] = htmlspecialchars(intval($item['id']));
    $item['title'] = htmlspecialchars(strip_tags($item['title']));
    return '<div id="Panel4" style="float:left;width:17%;margin-bottom:20px;margin-left:10px;">
                    <div id="Panel5" style="border-color:Black;border-width:1px;border-style:Solid;height:114px;width:123px;text-align:center;">
                      <img src="'.$item['thumbnail'].'" width="105px">
                    </div>
                   <p style="margin-top:10px;margin-bottom:10px;"><a style="font-family: Verdana, Sans-Serif;font-size: 13px;font-weight:bold;" href="Item.aspx?id='.$item['id'].'">'.$item['title'].'</a></p>
    <span style="font-family: Verdana, Sans-Serif;font-size: 11px;color:grey;">'.$item['dough'].' Dough</span>
                    </div>';
  }
}
  
/* COLORS */
$colorsrtx = [
    "1" => "#ffffff",
  "208" => "#e5e4de",
    "194" => "#a3a2a4",
 "26" => "#1b2a34",
    "21" => "#c4281b", "24" => "#f5cd2f",
  "3" => "#fdea8c",
    "23" => "#0d69ab",
    "107" => "#008f9b",
  "37" => "#a4bd46",
  "108" => "#685c43",
  "25" => "#624732",
  "18" => "#cc8e69",
  "100" => "#eec4b6"
];
?>
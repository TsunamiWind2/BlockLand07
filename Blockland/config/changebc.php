<?php
require 'init.php';
if(islogged() == false) {
  exit();
}
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);      
$uid = $input['uid'] ?? null;  
$bodpar= $input['bp'] ?? null;
$color = $input['color'] ?? null;  
$colros = 
[
"#ffffff" => ["1", "white"],
"#e5e4de" => ["208", "lightstonegrey"],
"#a3a2a4" => ["194", "mediumstonegrey"],
"#1b2a34" => ["26", "black"],"#c4281b" => ["21", "brightred"],
"#f5cd2f" => ["24", "brightyellow"],
"#fdea8c" => ["3", "lightyellow"],
"#0d69ab" => ["23", "brightblue"],
"#008f9b" => ["107", "brightbluishgreen"],
"#a4bd46" => ["37", "brightgreen"],
"#685c43" => ["108", "earthyellow"],
"#624732" => ["25", "earthorange"],
"#cc8e69" => ["18", "nougat"],
"#eec4b6" => ["100", "lightred"]
];  
if(array_key_exists($color, $colros)) {
  list($robloxcolor, $robloxname) = $colros[$color];
}else {
  $robloxcolor = null;
  $robloxname = '';
}  
if($uid && $bodpar&& in_array($bodpar, ['Head', 'Torso', 'LeftArm', 'RightArm', 'LeftLeg', 'RightLeg'])) {
  $stmt = $pdo->prepare("UPDATE bodycolors SET `$bodpar` = :color, updated = NOW() WHERE uid = :id");
  $stmt->bindParam(':id', $uid, PDO::PARAM_INT);
  $stmt->bindParam(':color', $robloxcolor, PDO::PARAM_STR);
  $stmt->execute();
  echo json_encode(['robloxcolor' => $robloxcolor,'robloxname' => $robloxname]);
}else {
  echo json_encode(['error' => 'NAH']);
}
?>

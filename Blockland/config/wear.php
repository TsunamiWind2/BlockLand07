<?php
require 'init.php';
if(islogged() == false) {
  exit();
}
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(isset($_POST['aid'])) {
   $aid = intval($_POST['aid']);
   $stmt = $pdo->prepare("SELECT * FROM inventory WHERE uid = ? AND aid = ?");
   $stmt->execute([$me['id'],$aid]);
   if($stmt->rowCount() > 0) {
    $wearingb= $pdo->prepare("SELECT * FROM wearing WHERE uid = ?");
    $wearingb->execute([$me['id']]);
    if($wearingb->rowCount() > 0) {
     $delete = $pdo->prepare("DELETE FROM wearing WHERE uid = ?");
     $delete->bindValue(1,(int)$me['id'],PDO::PARAM_INT);
     $delete->execute();
    }
   $wear = $pdo->prepare("INSERT INTO wearing (uid,aid,timestamp) VALUES (?,?,NOW())");
   if($wear->execute([$me['id'],$aid])) { echo json_encode(['success' => true, 'message' => 'YUH']); }else {
     echo json_encode(['success' => false, 'message' => 'NAH.']);
   }
    }else {
   echo json_encode(['success' => false, 'message' => 'HAHA.']);
  }
}  else {
    echo json_encode(['success' => false, 'message' => 'bro.']);
  }
  }else {
    echo json_encode(['success' => false, 'message' => 'nopl.']);

  
  }
?>


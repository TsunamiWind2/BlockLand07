<?php
require 'init.php';
if(islogged() == false) {
  exit();
}
header('Content-Type: application/json');
ob_start();
$stmt = $pdo->prepare("SELECT * FROM wearing WHERE uid = :uid LIMIT 1");
$stmt->bindParam(':uid', $me['id'], PDO::PARAM_INT);
$stmt->execute();
$item = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$item) {
  exit();
}
$stmt = $pdo->prepare("SELECT * FROM inventory WHERE aid = :aid LIMIT 1");
$stmt->bindParam(':aid',$item['aid'], PDO::PARAM_INT);
$stmt->execute();
$item1 = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$item1) {
  exit();
}
$stmt = $pdo->prepare("SELECT * FROM catalog WHERE id = :aid LIMIT 1");
$stmt->bindParam(':aid',$item['aid'], PDO::PARAM_INT);
$stmt->execute();
$item2 = $stmt->fetch(PDO::FETCH_ASSOC);
if($item) {
  echo json_encode($item2);
}
?>
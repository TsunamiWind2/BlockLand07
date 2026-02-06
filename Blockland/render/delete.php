<?php
  //bymsokausa
  require '../config/init.php';
if(!isset($_GET['api']))die('no');
if($_GET['api'] !== $rhodumapikey)die('no');
header('Content-Type:text/plain');
$data=file_get_contents('php://input');
if(!$data)die('nodata');
parse_str($data,$post);
$id=$post['id']??'';
$type=$post['type']??'';
if(!$id||!$type)die('noid');
$stmt=$pdo->prepare("DELETE FROM renders WHERE aid=? AND type=?");
$stmt->execute([$id,$type]);
?>
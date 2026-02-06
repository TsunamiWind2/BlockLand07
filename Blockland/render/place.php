<?php
require '../config/init.php';
if(!isset($_GET['api']))die('no');
if($_GET['api'] !== $rhodumapikey)die('no');
 //coded by moskau goblox rendering 2025
$placeId = $_GET['id'] ?? null;  
if(!$placeId || !is_numeric($placeId)) {
  die('no.');
  exit();
}  
$stmt = $pdo->prepare("SELECT * FROM assets WHERE aid = :aid AND type = 4 ORDER by id DESC LIMIT 1");
$stmt->execute([':aid' => $placeId]);
$asset = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$asset) { die('no'); exit(); }
echo "for _,v in pairs(game.GuiRoot:GetChildren()) do v:Remove() end\n"; 
echo "game:load('http://bl07.fr.to/asset/?id=".$asset['id']."')\n";
echo "for _,v in pairs(game.StarterPack:GetChildren()) do v:Remove() end";
?>
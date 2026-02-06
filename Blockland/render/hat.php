<?php
require '../config/init.php';
if(!isset($_GET['api']))die('no');
if($_GET['api'] !== $rhodumapikey)die('no');
 //coded by moskau goblox rendering 2025
$hatId= $_GET['id'] ?? null;  
if(!$hatId|| !is_numeric($hatId)) {
  die('no.');
  exit();
}  
$stmt = $pdo->prepare("SELECT * FROM assets WHERE aid = :aid AND type = 1 ORDER by id DESC LIMIT 1");
$stmt->execute([':aid' => $hatId]);
$asset = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$asset) { die('no'); exit(); }
echo "for _,v in pairs(game.GuiRoot:GetChildren()) do v:Remove() end\n";  
echo "game.Lighting.TimeOfDay = '12'\n";
//echo "game:load('http://bl07.fr.to/asset?id=1')";
echo "local hatb = game:GetObjects('http://bl07.fr.to/asset/?id=".$asset['id']."')[1]";
echo "hatb.Parent = game.Workspace";
?>
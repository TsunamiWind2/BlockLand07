<?php
require '../config/init.php';
if(!isset($_GET['api']))die('no');
if($_GET['api'] !== $rhodumapikey)die('no');
 //coded by moskau goblox rendering 2025
$userId = $_GET['id'] ?? null;  
if(!$userId || !is_numeric($userId)) {
  die('no.');
  exit();
}  
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :aid ORDER by id DESC LIMIT 1");
$stmt->execute([':aid' => $userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$user) { die('no'); exit(); }
//RAHHH
$stmt = $pdo->prepare("SELECT * FROM wearing WHERE uid = :uid");
$stmt->execute([':uid' => $userId]);
$hat = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$hat) {
$assethat = "http://bl07.fr.to/asset/?id=".$hat['aid'].";"; 
}else { $assethat = ""; }
//USER
echo "for _,v in pairs(game.GuiRoot:GetChildren()) do v:Remove() end\n";  
echo "game.Lighting.TimeOfDay = '12'\n";
echo "if not game.Players:GetChildren()[1] then game.Players:CreateLocalPlayer(0) end\n";
echo "plr = game.Players.LocalPlayer\n";
echo "plr.CharacterAppearance = '".$assethat."http://bl07.fr.to/charapp/?id=".$userId."'\n";
echo "plr:LoadCharacter()\n";
?>
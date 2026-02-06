<?php
require_once("../config/init.php");  
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Content-Type: text/plain");
$id = isset($_GET['id']) ? $_GET['id'] : 0;  
$stmt = $pdo->prepare("SELECT * FROM bodycolors WHERE uid = :id");
$stmt->execute(['id' => $id]);
$user = $stmt->fetch();  
  if(!$user) {
    exit();
    }
$bodycolors = '<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
  <External>null</External>
  <External>nil</External>
  <Item class="BodyColors" referent="RBX0">
    <Properties>
      <int name="HeadColor">'.$user['head'].'</int>
      <int name="LeftArmColor">'.$user['leftarm'].'</int>
      <int name="LeftLegColor">'.$user['leftleg'].'</int>
      <string name="Name">Body Colors</string>
      <int name="RightArmColor">'.$user['rightarm'].'</int>
      <int name="RightLegColor">'.$user['rightleg'].'</int>
      <int name="TorsoColor">'.$user['torso'].'</int>
      <bool name="archivable">true</bool>
    </Properties>
  </Item>
</roblox>';
echo $bodycolors;
?>
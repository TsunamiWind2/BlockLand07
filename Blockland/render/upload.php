<?php
  require '../config/init.php';
  //afgaf
header('Content-Type:text/plain');
if(!isset($_GET['api']))die('no');
if($_GET['api'] !== $rhodumapikey)die('no');
if($_SERVER['REQUEST_METHOD']!=='POST')die('no');
  
if(!isset($_FILES['file']))die('nofile');

  $f=$_FILES['file'];
$img=@getimagesize($f['tmp_name']);
if(!$img)die('noimg');
$name=$f['name'];

  $parts=explode('_',$name);if(count($parts)<2)die('badname');

  
  $type=$parts[0];

  $id=explode('.',$parts[1])[0];
$cdn='../renders/';
if(!is_dir($upload_dir)){
mkdir($upload_dir,0755,true);
}
$target=$cdn.$type.'_'.$id.'.png';
if(move_uploaded_file($f['tmp_name'],$target)){
echo 'ok:'.$target;
}
  else{
echo 'fail';
      exit();
}
?>
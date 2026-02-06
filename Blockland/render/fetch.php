<?php
  require '../config/init.php';
if(!isset($_GET['api']))die('no');
if($_GET['api'] !== $rhodumapikey)die('no');
$stmt = $pdo->query("SELECT * FROM renders WHERE type IN ('hat', 'user', 'place', 'model') ORDER BY RAND()");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($results) > 0) {
//adafdagdasgfsdgadgfagafgadfh
 $renders= [];
  foreach($results as $row) {
        $renders[] = $row['type'] . ':' . $row['aid'];
    
}
  
  
    echo implode(';', $renders);
  exit();
}else {
  

    exit();
}
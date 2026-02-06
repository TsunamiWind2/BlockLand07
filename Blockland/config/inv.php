<?php
require 'init.php';   
header('Content-Type: application/json');
$page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
if(islogged() == false) {
  exit();
}else
if($page < 1) {
  exit();
}
$itemsper= 5;
$offset = ($page - 1) * $itemsper;
$stmt= $pdo->prepare("SELECT COUNT(*) AS totalitems FROM inventory WHERE uid = :uid");
$stmt->bindParam(':uid', $_SESSION['id'], PDO::PARAM_INT);
$stmt->execute();
$totalitems= $stmt->fetchColumn();
$totalpages= ceil($totalitems/ $itemsper);
$stmt = $pdo->prepare("SELECT aid FROM inventory WHERE uid = :uid LIMIT :limit OFFSET :offset");
$stmt->bindParam(':uid', $_SESSION['id'], PDO::PARAM_INT);
$stmt->bindValue(':limit', $itemsper, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
$itemsl= [];
foreach ($items as $item) {
$stmt = $pdo->prepare("SELECT * FROM catalog WHERE id = :aid");
$stmt->bindParam(':aid', $item['aid'], PDO::PARAM_INT);
$stmt->execute();
$itemsl[] = $stmt->fetch(PDO::FETCH_ASSOC);
}
$response = [
'current' => $page,
'itemsper' => $itemsper,
'total' => $totalitems,
'pages' => $totalpages,
'items' => $itemsl
];
echo json_encode($response);
?>
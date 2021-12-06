<?php
//更新処理

include_once('./dbconnect.php');

// 【処理の流れ】
// 1. 画面で入力された値の取得
// 2. PHPからMySQLへ接続
// 3. SQL文を作成して、画面で入力された値でrecordsテーブルを更新
// 4. index.phpに画面遷移する

$date = $_POST['date'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$type = $_POST['type'];
$id = $_POST['id'];

//削除のSQL文、SETは一つしか代入できない。値を返ってこないクエリから代入するとNULLを返す。
$sql = "UPDATE records SET title = :title, type = :type, amount = :amount, date = :date, updated_at = now() WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':type', $type, PDO::PARAM_INT);
$stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
$stmt->bindParam(':date', $date, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$stmt->execute();

header('Location: ./index.php');
exit;
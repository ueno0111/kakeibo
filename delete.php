<?php

include_once('./dbconnect.php');

//index.phpからGETされたidを変数に入れる。
$id = $_GET['id'];

// DB接続
// DELETEのSQLを準備
// SQLを実行
// TOPに移動

$sql = 'DELETE FROM records WHERE id = :id';

//SQL文の実行準備
$stmt = $pdo->prepare($sql);

//セキュリティ、SQL文を不正に操作するSQLインジェクションの攻撃を防ぐ手段、直に値を書かずにプレースホルダーに記入する。
$stmt->bindParam(':id', $id, PDO::PARAM_INT);//防具みたいなもの。　:id=プレースホルダー、$id=バインドするデータ

//実行する
$stmt->execute();

//index.phpへ戻る
header('Location: ./index.php');
exit;
<?php

try {

  $pdo = new PDO(
    'mysql:dbname=takeshiueno_database1;host=mysql1.php.xdomain.ne.jp',
    'takeshiueno_0111',
    '5050Rock',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );

} catch (PDOException $e) {

    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());

}
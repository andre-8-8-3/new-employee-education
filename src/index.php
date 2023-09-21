<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php echo "Hello world"; ?>
<?php



$db_name = "database";
$db_user = "database";
$db_pass = "database";


try {
    $pdo = new PDO('pgsql:host=postgresql;dbname=' . $db_name . ';', $db_user, $db_pass);
    print('<br>');
    if ($pdo == null) {
        print('ポスグレのPDO接続に失敗しました。<br>');
    } else {
        print('ポスグレのPDO接続に成功しました。<br>');
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print('Error:' . $e->getMessage());
    die();
}


try {
    //Mysql,MariaDB用 ユーザーはrootのみ
    $pdo = new PDO('mysql:host=mariadb;dbname=' . $db_name . ';', 'root', $db_pass);
    print('<br>');
    if ($pdo == null) {
        print('MariaDBのPDO接続に失敗しました。<br>');
    } else {
        print('MariaDBのPDO接続に成功しました。<br>');
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print('Error:' . $e->getMessage());
    die();
}

?>
</body>
</html>
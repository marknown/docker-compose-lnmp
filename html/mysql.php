<?php
try {
    $dbh  = new PDO("mysql:host=mysql;dbname=mysql", 'root', '123456'); //初始化一个PDO对象
    $stmt = $dbh->query("show databases;");
    $rows = $stmt->fetchAll();

    echo "Mysql test ok, Databases is:<dt>";

    foreach ($rows as $row) {
        echo "<ol>" . $row['Database'] . "</ol>";
    }
    echo '</dt>';
} catch (PDOException $e) {
    echo sprintf("Mysql exception occurred, message is %s", $e->getMessage());
}
<?php
$user = 'root';
$pass = '123456';
echo '<pre>';
try {
    $dbh = new PDO('mysql:host=mysql;dbname=mysql', $user, $pass);
    foreach($dbh->query('show databases') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
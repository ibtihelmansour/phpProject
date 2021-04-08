<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=shop;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'connexion success';
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>

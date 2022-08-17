<?php
require()
require '../vendor/envms/fluentpdo/src/Query.php';

//use \Envms;



$pdo = new PDO('mysql:dbname=pruebas', 'root');
$fpdo = new FluentPDO($pdo);
//$fluent = new \Envms\FluentPDO\Query($pdo);
/*
$query = $fluent->from('usuarios')
             ->where('article.published_at > ?', $date)
             ->orderBy('published_at DESC')
             ->limit(5);
*/

$user_id = 1;

    $query = $fluent->from('usuarios')->where('id', $user_id);

    foreach($query as $row){
        echo 'Hello, ' . $row['nombre'] . ' ' . $row['apellido'] . '!';    
    }

?>
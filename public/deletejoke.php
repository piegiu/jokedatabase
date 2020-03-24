<?php

include_once __DIR__.'/../include/databaseConnection.php';
include __DIR__.'/../include/databaseFunction.php';
try
{

    delete($pdo,'ijdb.joke','id',$_POST['id']);

    header('location: joke.php');
}catch(PDOException $e){

    $title =' An error has occurred';
    $output = 'Database error: '. $e->getMessage() . ' in '. $e->getFile() .': '.$e->getLine();
}
include_once __DIR__.'/../include/joke.html.php';


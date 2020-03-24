<?php

if(isset($_POST['joketext'])){
    try {
        $title = 'Edit your Joke';
        include_once __DIR__ . '/../include/databaseConnection.php';
        include __DIR__."/../include/databaseFunction.php";
        include_once __DIR__ . '/../templates/editjoke.html.php';

        update($pdo,'joke','id', $array = [
                'id'=> $_GET['id'],
                'joketext'=> $_POST['joketext']
                ]
        );

        header('Location:joke.php');

    }catch (PDOException $e){

        $title = 'An error has occures';
        $output = 'Database error: '.$e->getMessage() . ' in '.
            $e->getFile(). ': '. $e->getLine();
    }
} else{

    if (isset($_GET['id'])){
        $joke = findById($pdo,'joke', 'id',$_GET['id']);
    }
    $title = 'Edit your Joke';

    ob_start();
    include __DIR__ . '/../templates/editjoke.html.php';
    $output = ob_get_clean();
}



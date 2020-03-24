<?php

$title= 'Add a new Joke';

    if(isset($_POST['joketext'])){
        try{
            include_once  __DIR__.'/../include/databaseConnection.php';
            include  __DIR__.'/../include/databaseFunction.php';
            include __DIR__ . '/../templates/addjoke.html.php';



            insert($pdo,'ijdb.joke', ['authorid'=> 1,
                            'joketext'=>$_POST['joketext'],
                            'jokedate'=> new DateTime()]);

            header('Location: joke.php');

        }catch(PDOException $e) {

            $title = 'An error has occures';
            $output = 'Database error: '.$e->getMessage() . ' in '.
            $e->getFile(). ': '. $e->getLine();

        }
    }
    else{
        $title = 'Add a new Joke';
        include __DIR__ . '/../templates/addjoke.html.php';
    }









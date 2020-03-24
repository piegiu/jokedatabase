<?php

    $title = 'Joke List';

    try{
        //includo file per stringa di connesione al database
        include_once __DIR__.'/../include/databaseConnection.php';
        include __DIR__.'/../include/databaseFunction.php';

        $title = 'Joke List';

        $totalJokes = total($pdo,'joke');

        /* $nam = $pdo->query('SELECT joke.id, author.name, joketext, authorid, jokedate FROM joke
                             INNER JOIN author ON
                             authorid = author.id;');

         $names = $nam->fetchAll(PDO::FETCH_ASSOC);*/

        $result = findAll($pdo,'joke');

        $jokes=[];


    }catch (PDOException $e){

        $output = 'Database Error '. $e->getMessage().' in '.  $e->getFile() .': '.$e->getLine();
        echo $output;
    }

    include __DIR__.'/../templates/joke.html.php';









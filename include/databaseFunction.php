<?php

    include_once __DIR__.'/../include/databaseFunction.php';


    //Richiama la funzione query() e le passa l'array vuoto $parameters
    function query($pdo,$sql,$parameters=[]){

        $query = $pdo->prepare($sql);

        $query ->execute($parameters);

        return $query;

    }

  //Seleziona e conta tutte le barzellette
  /* function totalJokes($pdo){

        $sql = ('SELECT COUNT(*) FROM joke');

        $query = query($pdo, $sql, $parameters=[]);

        $row = $query ->fetch();

        return $row[0];

    }


    //Seleziona la barzelletta in base al id della barzelletta
    function getJoke($pdo, $id){

        $parameters = [':id'=> $id];

        $sql = 'SELECT * FROM joke WHERE joke.id =:id';

        $query = query($pdo,$sql,$parameters);

        return $query->fetch(PDO::FETCH_ASSOC);

    }


    //Funzione che inserisce una barzelletta
    function insertJoke($pdo, $fields){


        $sql = 'INSERT INTO ijdb.joke (';

        foreach ($fields as $key => $value){

            $sql .= $key .' ,';
        }

        $sql = rtrim($sql,',');

        $sql .= ') VALUES (';

        foreach ($fields as $key => $value) {

            $sql .= ':' .$key .' ,';

        }

        $sql = rtrim($sql , ',');

        $sql .= ');';

        $fields = processData($fields);

        query( $pdo, $sql, $fields);

    }


    //Funzione che elimina una barzelletta
    function deleteJoke($pdo, $id){

        $parameters = [':id'=> $id];

        $sql = 'DELETE FROM joke WHERE joke.id = :id';

        query( $pdo, $sql, $parameters);

    }


    //Funzione che aggiorna una barzelletta
    function updateJoke($pdo,$fields){

        $array = ['id' => ':id',
            'joketext' => ':joketext'];

        $sql = 'UPDATE ijdb.joke SET ';

        foreach ($array as $key => $value){

            $sql .= $key . ' = ' . $value . ',';
        }

        $sql = rtrim($sql,',');

        $sql .= ' WHERE id = :primaryKey;';

        $fields['primaryKey'] = $fields['id'];

        $fields = processData($fields);

        query($pdo,$sql,$fields);

    }
*/

    function processData($fields){
        foreach ($fields as $key => $value) {
            if($value instanceof DateTime){
                $fields[$key] = $value -> format('Y-m-d');
            }
        }
        return $fields;
    }

    //FUNZIONE CHE ESTRAE TUTTI GLI AUTORI
    function allAuthors($pdo){

        $authors = query ($pdo, 'SELECT * FROM ijdb.author');

        return $authors -> fetchAll(PDO::FETCH_ASSOC);

    }

    //FUNZIONE PER ELIMINARE UN AUTORE
    function deleteAuhtor($pdo,$id){

        $parameters = [':id'=> $id];

        query($pdo,'DELETE FROM ijdb.author 
                  WHERE id = :id', $parameters);

    }

    //FUNZIONE INSERISCE UN NUOVO AUTORE
    function insertAuthor($pdo,$fields){
        $sql = 'INSERT INTO ijdn.author ( ';

        foreach ($fields as $key => $value) {

            $sql .= $key . ' ,';
        }

        $sql = rtrim($sql,',');

        $sql.= ') VALUES (';

        foreach ($fields as $key => $value) {

            $sql .= ':'.$key .' ,';
        }

        $sql = rtrim($sql,',');

        $sql .= ')';

        $fields = processData($fields);

        query($pdo, $sql, $fields);

    }

    function findAll($pdo,$table){
        $result = query($pdo,'SELECT * FROM '.$table);
        return $result -> fetchAll(PDO::FETCH_ASSOC);
    }

    function delete($pdo, $table, $primaryKey, $id){
        $parameters = [':id'=>$id];
        query($pdo,'DELETE FROM '.  $table .' WHERE ' . $primaryKey . ' = :id',$parameters);
    }

    function insert($pdo,$table,$fields){
        $sql = 'INSERT INTO '.$table.' ( ';

        foreach ($fields as $key => $value) {

            $sql .= $key . ' ,';
        }

        $sql = rtrim($sql,',');

        $sql.= ') VALUES (';

        foreach ($fields as $key => $value) {

            $sql .= ':'.$key .' ,';
        }

        $sql = rtrim($sql,',');

        $sql .= ')';

        $fields = processData($fields);

        query($pdo, $sql, $fields);

    }

    function update($pdo,$table,$primaryKey,$fields){
        $sql = 'UPDATE '.$table. ' SET ';

        foreach ($fields as $key => $value){

            $sql .= $key . ' = :' . $key . ',';
        }

        $sql = rtrim($sql,',');

        $sql .= ' WHERE '. $primaryKey .'= :primaryKey;';

        $fields['primaryKey'] = $fields['id'];

        $fields = processData($fields);

        query($pdo,$sql,$fields);

    }

    function findById($pdo, $table, $primaryKey, $value){
        $sql = 'SELECT * FROM '.$table.' WHERE '.$primaryKey. ' = :value';

        $parameters =['value' => $value];

        $sql = query($pdo,$sql,$parameters);

        return $sql -> fetch();
    }

    function total($pdo,$table){
        $sql = query($pdo, 'SELECT COUNT(*) FROM '. $table .';',$parameters = []);
        $row = $sql->fetch();
        return $row[0];
    }
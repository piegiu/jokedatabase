<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/bootstrap.css.css">
    <link rel="stylesheet" href="/css/bootstrap.grid.css">
    <link rel="stylesheet" href="/css/bootstrap.reboot.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<header>

    <div class="container">
        <nav class="navbar navbar-light fixed-top navbar-exand-lg" style="background-color: #e3f2fd;">
            <h1 style="color: #005cbf"> <?= $title?> </h1>
            <ul class="nav navbar mr-auto mt-2 mt-lg-0 navbar-left d-flex d-inline-flex " >

                <li class="nav-item d-inline-flex  align-items-center mr-2">
                    <a class="nav-link d-inline-flex" href="index.php">Home</a></li>
                <li class="nav-item d-inline-flex  align-items-center mr-2">
                    <a class="nav-link d-inline-flex" href="joke.php">Joke List</a></li>
                <li class="nav-item d-inline-flex  align-items-center mr-2">
                    <a class="nav-link d-inline-flex" href="addjoke.php">Add Joke</a></li>
            </ul>
        </nav>
    </div>
</header>
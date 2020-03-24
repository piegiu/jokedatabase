<?php include_once __DIR__.'/../include/header.php';?>


<main style="margin-top: 80px;" >
    <div class="row alert-light m-xl-5" style="color: #6bafba; text-align:left; ">
        <h1> Welcome to the Joke Database</h1>
    </div>
    <hr style="border: 1px solid #6bafba;">
    <div class="row alert-light " style="color: #6bafba; margin-left: 40px;">
        <h3> <?php echo $totalJokes ;?> you have submitted to the Internet Joke Database. </h3>
    </div>
    <hr style="border: 1px solid #6bafba;">
<?php foreach ($result as $joke):?>
    <?php
    $author = findById($pdo,'author','id',$joke['authorid']);
    $jokes = [
        'id'=>$joke['id'],
        'joketext'=>$joke['joketext'],
        'jokedate'=>$joke['jokedate'],
        'name'=>$author['name'],
        'email'=>$author['email']
    ];
    ?>
    <div class="row alert-light " style="margin-left: 20px;color: #6bafba; text-align:left; "">
        <div class="col" style="text-align: left; margin-left: 20px; ">
            <h5> <?= htmlspecialchars($jokes['joketext'])?>
            </h5><p>(by <a href="mailto:<?= htmlspecialchars($jokes['email'],'ENT_QUOTES','UTF-8')?>" >
                <?=htmlspecialchars($jokes['name'])?> </a> on <?php $date = new DateTime($jokes['jokedate']); echo $date->format('jS F Y');?> )
            <a href="editjoke.php?id=<?= htmlspecialchars($jokes['id'])?>&joketext=<?= htmlspecialchars($jokes['joketext'])?>"> Edit </a></p>
        </div>
        <div class="col" style="margin-top: 20px; align-items: center" >
            <form action="deletejoke.php" method="post">
                <input type="hidden" name="id" value="<?=htmlspecialchars($jokes['id'])?>">
                <input class="btn btn-primary"  type="submit" id="submit" value="Delete">
            </form>
        </div>
    </div>
    <hr>
    <?php endforeach; ?>
</main>


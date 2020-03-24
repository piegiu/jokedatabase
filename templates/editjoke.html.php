
<?php include_once __DIR__.'/../include/header.php';?>

<main style="margin-top: 100px;" >
    <div class="row alert-light m-xl-5" style="color: #6bafba; text-align:left; ">
        <div class="col-xl-12" style="color: #6bafba; margin-top: 20px;">
            <h1> Edit your joke here! </h1>
        </div>
        <hr style=" border-top: 1px solid #6bafba;">
        <div style="margin-top: 20px; margin-left: 20px;">
            <h3> Here you can edit your joke!</h3>
        </div>
    </div>

    <form action="" method="post" style="margin-left: 70px">
        <input type="hidden" name="jokeid"  value="<?php if(isset($joke)):?> <?=$_GET['id']?>"> <?php endif; ?>
        <div class="form-row align-items-center">
            <div class="col-auto" style="color: #6bafba;">
                <label for="joketext">Text to edit </label>
            </div>
            <div class="col-auto" style="color: #6bafba;">
                <textarea id="joketext" name="joketext" rows="5" cols="100">
                    <?=$_GET['joketext']?>
                </textarea>
            </div>
            <div class="col-auto">

                <input class="btn btn-primary" type="submit" name="submit" value="Save">
            </div>

        </div>
    </form>
</main>

<?php include_once __DIR__.'/../include/footer.php';?>


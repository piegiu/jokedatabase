
<?php include_once __DIR__.'/../include/header.php';?>

<main style="margin-top: 100px;" >
    <div class="row alert-light m-xl-5" style="color: #6bafba; text-align:left; ">
        <div class="col-xl-12" style="color: #6bafba; margin-top: 20px;">
            <h1> Add your joke here! </h1>
        </div>
        <hr style=" border-top: 1px solid #6bafba;">
        <div style="margin-top: 20px; margin-left: 20px;">
            <h3> Here you can your new joke!</h3>
        </div>
    </div>

    <form style="margin-left: 70px" action="" method="post">
        <div class="form-row align-items-center">
            <div class="col-auto" style="color: #6bafba;">
                <label for="joketext">Type your joke here</label>
            </div>
            <div class="col-auto" style="color: #6bafba;">
                <textarea id="joketext" name="joketext" rows="5" cols="100">
                </textarea>
            </div>
            <div class="col-auto">
                <input class="btn btn-primary" type="submit" name="submit" value="Add">
            </div>
        </div>
    </form>

</main>

<?php include_once __DIR__.'/../include/footer.php';?>
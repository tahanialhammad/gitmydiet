<?php require('partials/head.php'); ?>
<!--or php include ('partials/head.php')-->

<div class="container">
<h1>Op een dag dieet</h1>

<h3>Een groep dieetmethoden voor één dag</h3>
<h5>Doe mee door uw naam te sturen</h5>

<form method="POST" action="/users">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>
<hr>
<div class="container">
    <?php foreach ($diets as $diet) : ?>
    <div class="card bg-dark text-white mb-2">
        <div class="card-body">
            <?php if ($diet->completed): ?>
                <h5 class="card-title"><s><?=  $diet->title; ?></s></h5>
                <p class="card-text"><?= $diet->description; ?></p>
            <?php else: ?>
                <h5 class="card-title"><?=  $diet->title; ?></h5>
                <p class="card-text"><?= $diet->description; ?></p>
            <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>





<!-- end container -->
</div>
<?php require('partials/footer.php'); ?>

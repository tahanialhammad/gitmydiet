<?php require('partials/head.php'); ?>

   
<div class="container">
<h1>Op een dag dieet</h1>

<h3>Een groep dieetmethoden voor één dag</h3>

<hr>
<?php foreach ($diets as $diet) : ?>

    <div class="card mb-2">
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

<?php require('partials/footer.php'); ?>

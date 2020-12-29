<?php require('partials/head.php'); ?>

   
<div class="container">
<h1>Op een dag dieet</h1>

<h3>Een groep dieetmethoden voor één dag</h3>

<hr>

<div class="container">
<?php foreach ($diets as $diet) : ?>
    <div class="card bg-dark text-white mb-3">
    <div class="row g-0" style="max-height:15rem; overflow: hidden;">
        <div class="col-md-4">
        <img class="img-fluid" src="<?=$diet->images?>" alt="<?= $diet->title; ?>">
        </div>
        <div class="col-md-8">
        <div class="card-header"><?= $diet->published; ?></div>
        <div class="card-body">
            <a href="/show?id=<?=  $diet->id; ?>"><h5 class="card-title"><?=  $diet->title; ?></h5></a>
            <p class="card-text"><?= $diet->description; ?></p>
            <p class="card-text"><small class="text-muted">
                <button class="like btn btn-link"><i class="fa fa-heart"></i></button>
                <input type="number" value="0" class="likenum">
                <?= $diet->likes; ?> Like 
            </small></p>
        </div>
        </div>
    </div>
    </div>
<?php endforeach; ?>
</div>


<!-- <div class="container">
    <?php foreach ($diets as $diet) : ?>
    <div class="card bg-dark text-white mb-2">
        <div class="card-header">Datum</div>
        <div class="card-body">
            <?php if ($diet->completed): ?>
                <h5 class="card-title"><s><?=  $diet->title; ?></s></h5>
                <p class="card-text"><?= $diet->description; ?></p>
            <?php else: ?>
                <h5 class="card-title"><?=  $diet->title; ?></h5>
                <p class="card-text"><?= $diet->description; ?></p>
            <?php endif; ?>
            <div class="card-footer">
                <button class="like"><i class="fa fa-heart"></i></button>
                <input type="number" value="0" class="likenum">
                Like
            </div>
            <h3><?= $diet->likes; ?></h3>
        </div>
    </div>
        
    <?php endforeach; ?>
</div> -->


</div>

<?php require('partials/footer.php'); ?>
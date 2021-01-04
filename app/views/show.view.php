<?php require('partials/head.php'); ?>

    <h1>Diet show</h1>
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
                    <h5 class="card-title"><?=  $diet->title; ?></h5>
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
    <a href="/show/delete?id=<?=  $diet->id; ?>">Delet</a>
    
<?php require('partials/footer.php'); ?>
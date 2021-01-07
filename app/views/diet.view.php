<?php require('partials/head.php'); ?>

<div class="container-fluid">
<h1>Op een dag dieet</h1>
<button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#newdiet" aria-expanded="false" aria-controls="newdiet">
    Add New Diet
</button>
<div class="collapse col-8" id="newdiet">
<form method="POST" action="/diet">
    <input name="title" id="diettitle" class="form-control mb-2" required></input>
    <input name="description" id="description" class="form-control mb-2" required></input>
    <input name="images" id="dietimages" class="form-control mb-2" required ></input>
    <button type="submit" class="btn btn-primary" >Submit</button>
</form>
</div>
<h3>Een groep dieet methoden voor één dag</h3>
<hr>

<div class="container">
<?php foreach ($diets as $diet) : ?>
    <div class="card bg-dark text-white mb-3">
    <div class="row g-0">
        <div class="col-md-4">
        <img class="img-fluid" style="height:15rem; width:15rem" src="<?=$diet->images?>" alt="<?= $diet->title; ?>">
        </div>
        <div class="col-md-8">
        <div class="card-header"><?= $diet->published; ?></div>
        <div class="card-body">
            <a href="/show?id=<?=  $diet->id; ?>"><h5 class="card-title"><?=  $diet->title; ?></h5></a>
            <p class="card-text text-truncate"><?= $diet->description; ?></p>
        </div>
        <div class="card-footer">
            <a href="/show/like?id=<?=  $diet->id; ?>">
                <i class="fa fa-heart"></i>
            </a> <span><?= $diet->likes; ?> Like </span>
            <a href="/show/add?id=<?=  $diet->id; ?>" class="btn btn-secondary">Add To MyDiet</a>
        </div>
        </div>
    </div>
    </div>
<?php endforeach; ?>
</div>

</div>

<?php require('partials/footer.php'); ?>
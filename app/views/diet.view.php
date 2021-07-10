<?php require('partials/head.php'); ?>

   
<div class="container">
<h1>Op een dag dieet</h1>
<button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#newdiet" aria-expanded="false" aria-controls="newdiet">
Voeg een nieuw dieet toe
</button>
<div class="collapse col-8" id="newdiet">
<form method="POST" action="/diet">
    <input name="title" id="diettitle" class="form-control mb-2"  placeholder="Dieet Titel" required></input>
    <input name="description" id="description" class="form-control mb-2" maxlength="255" placeholder="Dieet korte beschrijving"  required></input>
    <input name="images" id="dietimages" class="form-control mb-2" placeholder="Dieet foto" required ></input>

    <input name="breakfast" id="dietbreakfast" class="form-control mb-2" maxlength="255" placeholder="Diet breakfast schema"></input>
    <input name="Inbetween" id="dietInbetween" class="form-control mb-2" maxlength="255" placeholder="Diet tussendoor schema"></input>
    <input name="lunch" id="dietlunch" class="form-control mb-2" maxlength="255" placeholder="Diet lunch schema"></input>
    <input name="supper" id="dietsupper" class="form-control mb-2" maxlength="255" placeholder="Diet avondeten schema"></input>
    <textarea name="article" id="dietarticle"  class="form-control mb-2" cols="30" rows="10" placeholder="Dieet artikel"></textarea>
    <button type="submit" class="btn btn-primary" >Submit</button>
</form>
</div>
<h3>Een groep dieetmethoden voor één dag</h3>

<hr>

<div class="container">
<?php foreach ($diets as $diet) : ?>
    <div class="card bg-dark text-white mb-3">
    <div class="row g-0">
        <div class="col-md-4"style="max-height:15rem; overflow: hidden;">
        <img class="img-fluid" src="<?=$diet->images?>" alt="<?= $diet->title; ?>" >
        </div>
        <div class="col-md-8">
        <div class="card-header"><?= $diet->published; ?></div>
        <div class="card-body">
            <a href="/show?id=<?=  $diet->id; ?>"><h5 class="card-title"><?=  $diet->title; ?></h5></a>
            <p class="card-text text-truncate"><?= $diet->description; ?></p>
        </div>
        <div class="card-footer">
            <a href="/show/like?id=<?=  $diet->id; ?>"  class="btn btn-primary">
                <i class="fa fa-heart"></i>
                <span><?= $diet->likes; ?> Like </span>
            </a>
            <!-- <form method="POST" action="/show/like?id=<?=  $diet->id; ?>" >
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-heart"></i>
                    <span><?= $diet->likes; ?> Like </span>
                </button>
            </form> -->
            <a href="/show/add?id=<?=  $diet->id; ?>" class="btn btn-secondary">Voeg toe aan MijnDieet</a>
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

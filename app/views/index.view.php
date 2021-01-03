<?php require('partials/head.php'); ?>
<!--or php include ('partials/head.php')-->

<div class="container">
<h1>Op een dag dieet</h1>

<h3>Een groep dieetmethoden voor één dag</h3>

<div>
    <h5>Doe mee door uw naam te sturen</h5>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#register" aria-expanded="false" aria-controls="register">
    Registreren
  </button>
  <div class="collapse col-5" id="register">
    <div class="card card-body">
        <form method="POST" action="/users">
            <input name="name" id="username" class="form-control mb-2"  placeholder="Name" required></input>
            <input name="email" type="email" class="form-control mb-2" id="useremail" placeholder="name@example.com" required>
            <input name="password" type="password" class="form-control mb-2" id="inputPassword"  placeholder="password" required>
            <button type="submit" class="btn btn-primary mb-2" >Registreren</button>
        </form>
    </div>
</div>
</div>

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



<!-- end container -->
</div>
<?php require('partials/footer.php'); ?>
<?php require('partials/head.php'); ?>
<!--or php include ('partials/head.php')-->
<main class="container-fluid landing">
<div class="row">
    <div class="p-5 col-md-12 col-lg-6">
        <h1>Op een dag dieet</h1>
        <h4>Een groep dieetmethoden voor één dag</h4>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur minima alias error voluptatem at, voluptate odit beatae totam, architecto nesciunt hic maiores debitis culpa amet qui animi possimus doloribus! Sequi.</p>
        <div class="p-5">
            <h5>Doe mee door uw naam te sturen</h5>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#register" aria-expanded="false" aria-controls="register">
            Registreren
            </button>
            <div class="collapse container" id="register">
                <div class="card card-body">
                    <form method="POST" action="/register">
                        <input name="name" id="username" class="form-control mb-2"  placeholder="Name"></input>
                        <input name="email" type="email" class="form-control mb-2" id="useremail" placeholder="name@example.com">
                        <input name="password" type="password" class="form-control mb-2" id="inputPassword"  placeholder="password">
                        <button type="submit" class="btn btn-primary mb-2" >Registreren</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <img class="img-fluid" src="../public/img/pic3.png" alt="">
    </div>
</main> <!--End Landing Page-->

<!--populaire dieet-->
<div class="row mt-5 special">
<?php foreach ($bestDiet as $diet) : ?>
    <div class="col-md-12 col-lg-6">
        <img class="img-fluid mx-auto d-block" src="<?=$diet->images?>" alt="<?= $diet->title; ?>"  style="height:20rem;width:20rem; overflow: hidden;">
    </div>
    <div class="p-5 col-sm-12 col-lg-6 shadow">
        <h4>Het meest populaire dieet</h4>
        <h5><a href="/show?id=<?=  $diet->id; ?>"><?=  $diet->title; ?></a></h5>
        <p class="p-4 bg-light"><?= $diet->description; ?></p>
    </div>
<?php endforeach; ?>
</div>
<!--nieuwe dieet-->
<div class="row mt-5 special" >
<?php foreach ($newDiet as $diet) : ?>
    <div class="p-5 col-md-12 col-lg-6 bg-light shadow">
        <h4>Het nieuwe dieet</h4>
        <h5><a href="/show?id=<?=  $diet->id; ?>"><?=  $diet->title; ?></a></h5>
        <p class="p-4"><?= $diet->description; ?></p>
    </div>
    <div class="col-md-12 col-lg-6">
        <img class="img-fluid mx-auto d-block" src="<?=$diet->images?>" alt="<?= $diet->title; ?>"  style="height:20rem;width:20rem; overflow: hidden;">
    </div>
<?php endforeach; ?>
</div>

</div>
<?php require('partials/footer.php'); ?>
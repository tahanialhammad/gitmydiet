<?php require('partials/head.php'); ?>

<main class="container-fluid landing">
<div class="row">
    <div class="p-5 col-md-12 col-lg-6">
        <h1>Op een dag dieet</h1>
        <h4 class="fst-italic fw-light">Een groep dieetmethoden voor één dag</h4>
        <hr>
        <h5>Afvallen in een dag</h5>
        <p class="m-3 fw-light ">Als je met een dieet begint, zal je vaak in de begin periode het meeste afvallen. De stofwisseling staat nog in zijn normale stand en je lichaam bevat nog voldoende reserves. Je zou dus kunnen zeggen dat de eerste dagen van een dieet het meest succesvol zijn. Een dieet van slechts een dag is daarom ook zeer effectief. Daarbij is een dieet van één dag in de praktijk goed vol te houden. Vaak begin je heel gemotiveerd aan een dieet, en zakt de motivatie langzaam weg als je al enige tijd aan het diëten bent. Als het dieet maar één dag duurt, ben je dus volop gemotiveerd. Voordat de motivatie wegzakt, is het dieet al weer ten einde en heb je het gewenste resultaat behaald.</p>
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
        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/04/17/23/04/grilled-vegetables-3329075_1280.png" alt="">
    </div>
</main> <!--End Landing Page-->

<!--populaire dieet-->
<div class="row mt-5 special">
<?php foreach ($bestDiet as $diet) : ?>
    <div class="col-md-12 col-lg-6">
        <img class="img-fluid mx-auto d-block shadow" src="<?=$diet->images?>" alt="<?= $diet->title; ?>"  style="height:20rem;width:20rem; overflow: hidden;">
    </div>
    <div class="p-5 col-sm-12 col-lg-6 bg-light shadow">
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
    <div class="col-md-12 col-lg-6 ">
        <img class="img-fluid mx-auto d-block shadow" src="<?=$diet->images?>" alt="<?= $diet->title; ?>"  style="height:20rem;width:20rem; overflow: hidden;">
    </div>
<?php endforeach; ?>
</div>

</div>
<div class="container-fluid">
<img class="img-fluid rotate pb-0" src="https://cdn.pixabay.com/photo/2019/04/13/14/06/salad-4124699_1280.png" alt="">
</div>
<?php require('partials/footer.php'); ?>
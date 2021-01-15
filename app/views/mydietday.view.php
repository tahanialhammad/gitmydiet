<?php require('partials/head.php'); ?>
<div class="container-fluid">

<h1>Mijn Dieet</h1>
    
<div class="container">
<?php foreach ($myday as $mydiet) : ?>
    <div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
        <img class="img-fluid" src="<?= $mydiet->images; ?>" alt="<?= $mydiet->title; ?>">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?= $mydiet->title; ?></h5>
            <p class="card-text"><small class="text-muted"><?= $mydiet->published; ?></small></p>
            <p class="card-text"><?= $mydiet->description; ?></p>
        </div>
        </div>
    </div>
    
</div>

<p class="m-5"><?= $mydiet->article; ?></p>
            <table class="table container m-3">
            <h3>Dieet Schema</h3>
                <thead>
                    <tr>
                    <th scope="col">Tijd</th>
                    <th scope="col">Dag Schema</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Ontbijt</th>
                    <td><?= $mydiet->breakfast; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Tussendoor</th>
                    <td><?= $mydiet->Inbetween; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Lunch</th>
                    <td><?= $mydiet->lunch; ?></td>
                    </tr>
                    <th scope="row">Avondeten</th>
                    <td><?= $mydiet->supper; ?></td>
                    </tr>
                </tbody>
            </table>
<button type="button" class="btn btn-danger">
    <a href="/mydietday/deleteMydiet?diet_id=<?=  $mydiet->diet_id; ?>" class="btn btn-danger">
    <i class="fa fa-trash"></i> Verwijder dit dieet</a>
</button>
<hr>
<?php endforeach; ?>

</div>
<?php require('partials/footer.php'); ?>
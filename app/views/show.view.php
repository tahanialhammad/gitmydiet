<?php require('partials/head.php'); ?>
<div class="container-fluid p-3">
    <h1>Bekijk het dieet</h1>
    <div class="container-fluid p-3">
        <?php foreach ($diets as $diet) : ?>
            <div class="btn-group" role="group" aria-label="show buttons">
                <button type="button" class="btn btn-danger">
                    <a href="/show/delete?id=<?=  $diet->id; ?>" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Verwijderen</a>
                </button>
                <button type="button" class="btn btn-success">
                <a href="/show/add?id=<?=  $diet->id; ?>" class="btn btn-success">
                <i class="fa fa-plus-square"></i> Voeg toe aan MijnDieet</a>
                </button>
                <button type="button" class="btn btn-primary">
                <?php foreach($dietlike as $dietlike): ?>
                    <a href="/show/like?id=<?=  $diet->id; ?>" class="btn btn-primary">
                        <i class="fa fa-heart"></i>
                        <span><?= $dietlike->likes; ?> Like</span>
                     </a>
                <?php endforeach; ?>
                </button>
            </div>
            <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?=$diet->images?>" alt="<?= $diet->title; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-header"><?= $diet->published; ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?=  $diet->title; ?></h5>
                        <p class="card-text p-5"><?= $diet->description; ?></p>
                    </div>
                </div>
            </div>
            <p class="m-5"><?= $diet->article; ?></p>
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
                    <td><?= $diet->breakfast; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Tussendoor</th>
                    <td><?= $diet->Inbetween; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Lunch</th>
                    <td><?= $diet->lunch; ?></td>
                    </tr>
                    <th scope="row">Avondeten</th>
                    <td><?= $diet->supper; ?></td>
                    </tr>
                </tbody>
            </table>
            </div>
        <?php endforeach; ?>
    </div>
 
    <div class="container">
        <form method="POST" action="/show/comments?id=<?=  $diet->id; ?>">
        <div class="input-group mb-3">
            <input name="body" type="text" class="form-control" ></input>
            <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
        </form>

        <h3>Comments</h3>
        <?php foreach($comments as $comment): ?>
            <p class="mb-2 bg-light p-2"><?= $comment->body; ?></p>
        <?php endforeach; ?>
    </div>
</div>
<?php require('partials/footer.php'); ?>
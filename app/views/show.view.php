<?php require('partials/head.php'); ?>

    <h1>Diet show</h1>
    <div class="container">
        <?php foreach ($diets as $diet) : ?>
            <div class="btn-group" role="group" aria-label="show buttons">
                <button type="button" class="btn btn-danger">
                    <a href="/show/delete?id=<?=  $diet->id; ?>" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Delete</a>
                </button>
                <button type="button" class="btn btn-success">
                <a href="/show/add?id=<?=  $diet->id; ?>" class="btn btn-success">
                <i class="fa fa-plus-square"></i> Add To MyDiet</a>
                </button>
                <button type="button" class="btn btn-primary">
                    <a href="/show/like?id=<?=  $diet->id; ?>" class="btn btn-primary">
                        <i class="fa fa-heart"></i>
                    </a> <span><?= $diet->likes; ?> Like</span>
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
                        <p class="card-text"><?= $diet->description; ?></p>
                    </div>
                </div>
            </div>
            <p class="m-5"><?= $diet->description; ?></p>
            <table class="table container m-3">
                <thead>
                    <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Day Schema</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">moring</th>
                    <td>Mark</td>
                    </tr>
                    <tr>
                    <th scope="row">midden</th>
                    <td>Jacob</td>
                    </tr>
                    <tr>
                    <th scope="row">savond</th>
                    <td>@twitter</td>
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

<?php require('partials/footer.php'); ?>
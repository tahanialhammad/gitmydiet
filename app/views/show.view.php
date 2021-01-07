<?php require('partials/head.php'); ?>

    <h1>Show Diet</h1>
    <div class="container">
        <?php foreach ($diets as $diet) : ?>
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
                        <p class="card-footer">
                            <a href="/show/like?id=<?=  $diet->id; ?>">
                                <i class="fa fa-heart"></i>
                            </a> <span><?= $diet->likes; ?> Like</span>
                        </p>
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
    <a href="/show/add?id=<?=  $diet->id; ?>" class="btn btn-secondary">Add To MyDiet</a>
    <div class="container">
        <form method="POST" action="/show/comments?id=<?=  $diet->id; ?>">
            <input name="body" class="form-control mb-2" ></input>
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>

        <h3>Comments</h3>
        <?php foreach($comments as $comment): ?>
            <h2><?= $comment->body; ?></h2>
        <?php endforeach; ?>
    </div>
    
   <a href="/show/delete?id=<?=  $diet->id; ?>" class="btn btn-danger">
   <i class="fa fa-trash"></i> Delete</a>

<?php require('partials/footer.php'); ?>
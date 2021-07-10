<?php require('partials/head.php'); ?>
<div class="container-fluid p-5">
<div class="container-fluid col-sm-12 col-lg-6 text-center p-3">
    <h2 class="pb-3"><?= $siteinfo['name']; ?></h2>
    <p><?= $siteinfo['description']; ?></p>
    <hr>
</div>
    <div class="row">
        <div class="col-md-6 my-5">
            <h3>JUNIOR WEB DEVELOPER</h3>
            <ul class="list-group mt-3">
                <li class="list-group-item">PHP</li>
                <li class="list-group-item">MySql Database</li>
                <li class="list-group-item">JSON</li>
                <li class="list-group-item">Composer</li>
                <li class="list-group-item">Bootstrap</li>
            </ul>
        </div>

        <div class="col-md-6">
        <img class="img-fluid" src="https://images.unsplash.com/photo-1599507593499-a3f7d7d97667?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="">
        </div>
    </div>
</div>
    
<?php require('partials/footer.php'); ?>

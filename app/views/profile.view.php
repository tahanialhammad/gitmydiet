<?php require('partials/head.php'); ?>

<h1>My Profile</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3">
        <img class="img-fluid" src="https://images.unsplash.com/photo-1599507593499-a3f7d7d97667?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="">
        </div>
        <div class="col-md-6 mt-5">
            <h3><?= $loguser ["name"]; ?></h3>
            <ul class="list-group mt-3">
                <li class="list-group-item">User Email: <?= $loguser ["email"]; ?></li>
                <li class="list-group-item">User Type :
                <?php 
                if( $loguser ["groupType"] == 0){
                    echo ('User');}else{echo ('Admin');}
                 ?> 
                </li>
            </ul>
        </div>
    </div>
</div>
    

<?php require('partials/footer.php'); ?>
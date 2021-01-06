<?php require('partials/head.php'); ?>
<!--or php include ('partials/head.php')-->
<div class="container-fluid">

    <h3>De deelnemers</h3>
    <h5>Doe mee door uw naam te sturen</h5>
    <div class="container col-4 shadow-lg p-5">
        <form method="POST" action="/users">
        <div class="mb-3 row">
            <label for="username" class="form-label">User name</label>
            <input name="name" id="username" class="form-control mb-2" required></input>
        </div>
        <div class="mb-3 row">
            <label for="useremail" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="useremail" placeholder="name@example.com" required>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword" required>
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div>

    <hr>

    <?php foreach ($users  as $user) : ?>
        <li><?=  $user->name; ?></li>
    <?php endforeach; ?>

</div>
<?php require('partials/footer.php'); ?>
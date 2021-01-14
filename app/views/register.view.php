<?php require('partials/head.php'); ?>
<!--or php include ('partials/head.php')-->
<div class="container-fluid p-5">

<h3>REGISTREREN</h3>
<h5>Doe mee door uw naam te sturen</h5>

<div class="container col-md-6 shadow-lg p-5">
    <form method="POST" action="/register">
    <div class="mb-3 row">
        <label for="username" class="form-label">User name</label>
        <input name="name" id="username" class="form-control mb-2" placeholder= "User name" required></input>
    </div>
    
    <div class="mb-3 row">
        <label for="useremail" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="useremail" placeholder="name@example.com">
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Vul een wachtwoord in" required>
    </div>
    
    <div class="d-grid gap-2 mt-5">
        <button type="submit" class="btn btn-primary mb-3" type="button">Registreren</button>
    </div>
    </form>
</div>

<hr>

</div>
<?php require('partials/footer.php'); ?>
<?php require('partials/head.php'); ?>
<div class="container-fluid">
<h1>LOGIN</h1>
<div class="container col-4 shadow-lg p-5">
    <form class="px-3 py-2" method="POST" action="/login" >
        <div class="mb-3 row">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Vul een geldig e-mailadres in" required>                       
        </div>
        <div class="mb-3 row">
            <label for="password" class="form-label">Wachtwoord</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Vul een wachtwoord in" required>                            
        </div>
        <div class="d-grid gap-2 mt-5">
            <button type="submit" class="btn btn-primary mb-3" type="button">Inloggen</button>
        </div>
    </form>
</div>
</div>
<?php require('partials/footer.php'); ?>
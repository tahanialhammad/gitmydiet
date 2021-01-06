<?php require('partials/head.php'); ?>
<div class="container-fluid">
    <h1>Login</h1>
    <div class="container col-4">
        <form method="POST" action="/login">
            <div class="mb-3">
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" name="name" id="username" placeholder="User name">
            </div>
            <div class="mb-3">
                <label for="useremail" class="form-label">User Email</label>
                <input type="email" class="form-control" name="email" id="useremail" placeholder="Example@website.com">
            </div>
            <div class="mb-3">
                <label for="userpassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Password">
            </div>
            <div class="d-grid gap-2 mt-5">
                <button type="submit" class="btn btn-primary mb-3" type="button">Login</button>
            </div>
        </form>
    </div>
</div>
<?php require('partials/footer.php'); ?>
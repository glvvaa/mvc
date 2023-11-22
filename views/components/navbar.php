<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">website for juniors </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </div>
        </div>
    <div class="d-flex"
        <?php
        if(!isset($_SESSION["user"])) {
         ?>
        <a class="nav-link active" href="/login">Login</a>
        <a class="nav-link active" href="/register">Register</a>
        <?php
        } else {
            ?>
            <a class="nav-link active" href="/profile">Profile</a>
            <form action="/auth/logout" method="post">
<button type ="submit" class="btn btn-danger" "nav-link active"> Logout</button>
                </form>
            <a class="nav-link active" href="/logout">Logout</a>
            <?php
        }
        ?>
    </div>
</nav>

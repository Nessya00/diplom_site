<header class="container-fluid">  <!-- Маскимальная ширина 100% -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL ?>">My events</a>
                </h1>
            </div>
            <nav class="col">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                           <?php echo $_SESSION['login']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a>
                    </li>
            </nav>
        </div>
    </div>
</header>

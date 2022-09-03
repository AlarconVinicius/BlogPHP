<header class="header">

    <a href="#" class="logo"><span>R</span>eceitinhas</a>

    <?php include(ROOT_PATH . "/app/includes/message.php"); ?>

    <nav class="navbar">
        <a href="<?= BASE_URL . '/index.php'?>">Public</a>
        <a href="<?= BASE_URL . '/admin/posts/index.php'?>">Dashboard</a>
        <a href="<?= BASE_URL . '/logout.php'?>" style="color: red;">Sair</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>
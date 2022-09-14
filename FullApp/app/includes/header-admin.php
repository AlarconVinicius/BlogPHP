<header class="header">

    <a href="<?= BASE_URL . '/admin/dashboard.php'?>" class="logo"><span>R</span>eceitinhas</a>

    <?php include(ROOT_PATH . "/app/includes/message.php"); ?>

    <nav class="navbar">
        <?php if(isset($_SESSION["id"])): ?>
            <a href="<?= BASE_URL . '/index.php'?>">Public</a>
            <a href="<?= BASE_URL . '/admin/dashboard.php'?>">Dashboard</a>
            <a href="<?= BASE_URL . '/logout.php'?>" style="color: red;">Sair</a>
            <a class="header-name"><?= $_SESSION["username"]?></a>
        <?php endif; ?>
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
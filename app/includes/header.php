<header class="header">

    <a href="<?= BASE_URL . '/index.php'?>" class="logo"><span>R</span>eceitinhas</a>

    <?php include(ROOT_PATH . "/app/includes/message.php"); ?>

    <nav class="navbar">
        <a href="#banner">início</a>
        <a href="#posts">receitas</a>
        <a href="#posts">sobre</a>
        <a href="#contact">contato</a>
        <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1):?>
            <a href="<?= BASE_URL . '/admin/dashboard.php'?>">Dashboard</a>
            <a href="<?= BASE_URL . '/logout.php'?>" style="color: red;">Sair</a>
        <?php endif;?>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
    </div>

    <form action="index.php" method="POST" class="search-form">
        <input type="search" name="search-term" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>
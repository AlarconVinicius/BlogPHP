<div class="sidebar">

    <div class="box">
        <h3 class="title">Sobre nós</h3>
        <div class="about">
            <img src="assets/img/user01.png" alt="">
            <h3>Casal das Receitas</h3>
            <p>Somos um casal apaixonados por cozinhar!<br>Criamos esse Blog para postarmos nossas receitas.</p>
            <div class="follow">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <h3 class="title">categories</h3>
        <div class="category">
            <?php foreach($topics as $key => $topic): ?>
                
                <a href="<?= BASE_URL . '/index.php?topic_id='. $topic["id"] . '&name=' . $topic["name"]?>"> <?= $topic["name"]?> <span>42</span></a>
                
            <?php endforeach; ?>
            <!-- <a href="#"> photography <span>75</span> </a>
            <a href="#"> technology <span>22</span> </a>
            <a href="#"> fashion <span>17</span> </a>
            <a href="#"> study <span>48</span> </a>
            <a href="#"> science <span>39</span> </a>
            <a href="#"> music <span>59</span> </a>
            <a href="#"> public <span>12</span> </a>
            <a href="#"> business <span>32</span> </a>
            <a href="#"> sports <span>18</span> </a> -->
        </div>
    </div>

    <div class="box">
        <h3 class="title">popular posts</h3>
        <div class="p-post">
            <?php foreach($postsPublished as $key => $post): ?>
                <a href="#">
                    <h3><?= $key +1 . "." . $post["title"]?></h3>
                    <span><i class="far fa-clock"></i><?= date('F j, Y', strtotime($post["created_at"])); ?></span>
                </a>
            <?php endforeach; ?>
            
        </div>
    </div>

    <div class="box">
        <h3 class="title">popular tags</h3>
        <div class="tags">
            <a href="#">travel</a>
            <a href="#">photo</a>
            <a href="#">science</a>
            <a href="#">biology</a>
            <a href="#">aliens</a>
            <a href="#">nature</a>
            <a href="#">mountain</a>
            <a href="#">river</a>
            <a href="#">camp</a>
            <a href="#">landscape</a>
            <a href="#">world</a>
        </div>
    </div>

</div>
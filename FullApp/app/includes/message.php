<?php if(isset($_SESSION['message'])): ?>
    <div class="msg <?= $_SESSION['type'];?>">
        <p><?= $_SESSION['message'];?></p>
        <?php 
            unset($_SESSION['message']);
            unset($_SESSION['type']);
        ?>
    </div>
<?php endif; ?>
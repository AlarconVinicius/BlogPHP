<?php if(count((array)$errors) > 0):?>
    <div class="msg-error" style="display: flex; justify-content: center; align-items: center;">
        <?php foreach($errors as $error):?>
        <p style="color: red; text-align: center;"><?= $error ?></p>
        <?php endforeach;?>
    </div>
<?php endif;?>
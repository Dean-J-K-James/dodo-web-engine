<?php if (isset($_SESSION['login']) == true): ?>
    <div class="card-two-column profile">
        <img src="https://via.placeholder.com/32">
        <div class="card-two-column-details">
            <p class="white"><?= $_SESSION['login']['username'] ?></p>
        </div>
        <a href="<?= create_link('ajax/logout') ?>"></a>
    </div>
<?php endif; ?>

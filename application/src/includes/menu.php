<div id="menu" class="flex-row flex-08">
    <a href="<?= create_link(HOMEPGE) ?>" class="logo"><?= $_SESSION['brand']['logo'] ?></a>
    <div class="flex-fill"></div>
    <?php require_once 'pages/menu/brand.php' ?>
    <?php require_once 'pages/menu/profile.php' ?>
</div>
<div id="menu">
    <a href="<?= Assets::CreateAddress(HOMEPGE) ?>" class="logo"><?= $_SESSION['brand']['logo'] ?></a>
    <div class="divider"></div>
    <?php require_once 'pages/menu/brand.php' ?>
    <?php require_once 'pages/menu/profile.php' ?>
</div>
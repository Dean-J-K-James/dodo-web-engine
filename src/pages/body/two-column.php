<div class="cell-page">
    <?php foreach (json_decode($_SESSION['page']['page'], true) as $page) : ?>
        <div class="cell <?= $page ?>"><?php require 'pages/page/' . $page . '.php' ?></div>
    <?php endforeach; ?>
</div>

<div class="cell-side">
    <?php foreach (json_decode($_SESSION['page']['side'], true) as $side) : ?>
        <div class="cell <?= $side ?>"><?php require 'pages/side/' . $side . '.php' ?></div>
    <?php endforeach; ?>
</div>
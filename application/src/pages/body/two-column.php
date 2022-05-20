<div class="cell-page flex-col flex-16">
    <?php foreach (json_decode($_SESSION['page']['page'], true) as $page) : ?>
        <div class="cell flex-col flex-16 p-16 <?= $page ?>"><?php require 'pages/page/' . $page . '.php' ?></div>
    <?php endforeach; ?>
</div>

<div class="cell-side flex-col flex-16">
    <?php foreach (json_decode($_SESSION['page']['side'], true) as $side) : ?>
        <div class="cell flex-col flex-04 p-16 <?= $side ?>"><?php require 'pages/side/' . $side . '.php' ?></div>
    <?php endforeach; ?>
</div>
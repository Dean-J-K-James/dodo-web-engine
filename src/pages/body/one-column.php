<div class="cell-page">
    <?php foreach (json_decode($_SESSION['page']['page'], true) as $page) : ?>
        <div class="cell <?= $page ?>"><?php require 'pages/page/' . $page . '.php' ?></div>
    <?php endforeach; ?>
</div>
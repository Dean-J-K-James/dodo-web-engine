<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<div class="cell-page">
    <?php foreach (json_decode(PageSections::selectDB($_SESSION['page']['page'], 'page')['section'], true) as $page) : ?>
        <div class="cell <?= $page ?>"><?php require 'pages/page/' . $page . '.php' ?></div>
    <?php endforeach; ?>
</div>

<div class="cell-side">
    <?php foreach (json_decode(PageSections::selectDB($_SESSION['page']['page'], 'side')['section'], true) as $side) : ?>
        <div class="cell <?= $side ?>"><?php require 'pages/side/' . $side . '.php' ?></div>
    <?php endforeach; ?>
</div>
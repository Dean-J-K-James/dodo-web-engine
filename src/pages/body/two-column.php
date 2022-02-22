<!---------------------------------------------------------->
<!-- Dean James - Pangean Flying Cactus - The Coding Dodo -->
<!---------------------------------------------------------->

<div class="cell-page">
    <?php foreach (json_decode(PageSections::selectDB($_SESSION['page']['slug'], 'page')['section'], true) as $page) : ?>
        <div class="cell <?= $page ?>"><?php require 'pages/page/' . $page . '.php' ?></div>
    <?php endforeach; ?>
</div>

<div class="cell-side">
    <?php foreach (json_decode(PageSections::selectDB($_SESSION['page']['slug'], 'side')['section'], true) as $side) : ?>
        <div class="cell <?= $side ?>"><?php require 'pages/side/' . $side . '.php' ?></div>
    <?php endforeach; ?>
</div>
<?php foreach (Definitions::selectDB($data['category']) as $element): ?>
    <a href="<?= Assets::CreateAddress("blog/" . $element['slug']) ?>" class="<?= (isset($_GET['name']) && $_GET['name'] == $element['slug'] ? 'active' : '') ?> form-group">
        <p class="subtitle"><?= $element['date'] ?></p>
        <p class="title"><?= $element['name'] ?></p>
    </a>
<?php endforeach ?>
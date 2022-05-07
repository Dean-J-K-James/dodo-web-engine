<?php foreach (Categories::selectDB() as $cat): ?>
    <h2><?= ucwords(str_replace('-', ' ', $cat)) ?></h2>
    <hr>
    <?php foreach (DefinitionsByCategory::selectDB($cat) as $definition): ?>
        <?php require 'includes/article-card.php'; ?>
    <?php endforeach ?>
<?php endforeach ?>
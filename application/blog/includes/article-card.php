<div class="card-two-column article">
    <img src="<?= Assets::GetBrandAsset("contents/" . $definition['slug'] . "/thumbnail.png"); ?>" alt="<?= $definition['name'] ?>" style="width: 128px;">
    <div class="card-two-column-details">
        <h3><?= $definition['name'] ?></h3>
        <p class="subtitle">Last Updated: <?= $definition['date'] ?></p>
        <p><?= $definition['description'] ?></p>
        <div class="divider"></div>
    </div>
    <a href="<?= Assets::CreateAddress("blog/" . $definition['slug']) ?>"></a>
</div>
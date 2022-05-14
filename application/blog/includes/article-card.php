<div class="card-two-column article">
    <img src="<?= load_asset_v("contents/" . $definition['slug'] . "/thumbnail.png"); ?>" alt="<?= $definition['name'] ?>" style="height: 128px;">
    <div class="card-two-column-details">
        <h3><?= $definition['name'] ?></h3>
        <p class="subtitle">Last Updated: <?= $definition['date'] ?></p>
        <div class="tag-parent">
            <div class="tag"><?= ucwords(str_replace('-', ' ', $cat)) ?></div>
        </div>
        <p><?= $definition['description'] ?></p>
        <div class="divider"></div>
    </div>
    <a href="<?= create_link("blog/" . $definition['slug']) ?>"></a>
</div>
<hr>
<?php foreach (Brand::selectAllDB() as $brand): ?>
    <?php if (in_array($brand['brand'], json_decode($_SESSION['login']['account_type'], true))): ?>
        <div class="card-two-column article">
            <div class="card-two-column-details">
                <h3><?= $brand['name'] ?></h3>
                <p><?= $brand['description'] ?></p>
                <div class="tag-parent">
                    <?php foreach (json_decode($brand['tags'], true) as $tag): ?>
                        <div class="tag"><?= $tag ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="divider"></div>
            </div>
            <a href="<?= Assets::CreateAddress($brand['homepage']) ?>"></a>
        </div>
        <hr>
    <?php endif; ?>
<?php endforeach; ?>
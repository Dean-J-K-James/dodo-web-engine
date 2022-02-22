<!---------------------------------------------------------->
<!-- Dean James - Pangean Flying Cactus - The Coding Dodo -->
<!---------------------------------------------------------->

<?php foreach (json_decode($_SESSION['page']['js'], true) as $file): ?><script src="<?= load_asset('js/' . $file) ?>" defer></script><?php endforeach; ?>
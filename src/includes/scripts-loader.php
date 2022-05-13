<?php 

#
foreach (json_decode($_SESSION['brand']['js'], true) as $file) { echo '<script src="' . load_asset_v('js/' . $file) . '" defer></script>'; }

#
foreach (json_decode($_SESSION['page' ]['js'], true) as $file) { echo '<script src="' . load_asset_v('js/' . $file) . '" defer></script>'; }
<?php
$page = $_REQUEST['page'];
$json = json_decode(file_get_contents(Assets::LoadBrandFile('contents/' . $page . '-table.json')), true);
?>

<form action="<?= Assets::CreateAddress($json['act'] . '/0') ?>" method="post">
    <button>Create New</button>
</form>
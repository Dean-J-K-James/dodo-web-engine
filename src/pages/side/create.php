<?php
$page = $_REQUEST['page'];
$json = json_decode(file_get_contents(load_file('contents/' . $page . '-table.json')), true);
?>

<form action="<?= create_link($json['act'] . '/0') ?>" method="post">
    <button>Create New</button>
</form>
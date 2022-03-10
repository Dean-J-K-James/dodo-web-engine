<?php require_once 'includes/custom-header.php'; ?>
<?php require_once 'includes/configuration.php'; ?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>%TITLE%</title>
        <link rel="stylesheet" href="<?= load_asset("css/main.css") ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <?php require_once 'includes/head.php' ?>
    </head>
    <body>
        <?php require_once 'includes/cook.php' ?>
        <?php require_once 'includes/body.php' ?>
    </body>
</html>

<?php ob_end_flush(); ?>
<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<?php
$brand = isset($_GET['brand']) ? $_GET['brand'] : "admin";
$page  = isset($_GET['page' ]) ? $_GET['page' ] : "home";

if (($_SESSION['page'] = Page::selectDB($brand, $page)) == null)
{
    header('Location: /404');
    exit;
}
<?php

if ($_GET['page'] == 'home')
{
    $_GET['page'] = HOMEPGE;
}

$_SESSION['page']  = Page::selectDB($_GET['page']);
$_SESSION['brand'] = Brand::selectDB($_SESSION['page']['brand']);

if ($_SESSION['brand'] == false)
{
    header('Location: ' . Assets::CreateAddress("error/page-not-found"));
    exit;
}
<?php

if ($_SESSION['page']['brand'] != 'index' && in_array($_SESSION['brand']['brand'], json_decode($_SESSION['login']['account_type'], true)) == false)
{
    header('Location: ' . Assets::CreateAddress(HOMEPGE));
    exit;
}
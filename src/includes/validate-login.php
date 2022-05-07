<?php

if ($_SESSION['page']['slug'] != 'login' && isset($_SESSION['login']) == false)
{
    header('Location: ' . Assets::CreateAddress('login'));
    exit;
}

if ($_SESSION['page']['slug'] == 'login' && isset($_SESSION['login']) != false)
{
    header('Location: ' . Assets::CreateAddress('home'));
    exit;
}
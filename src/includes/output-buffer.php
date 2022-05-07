<?php

ob_start(function ($buffer)
{
    $buffer = str_replace('%TITLE%', $_SESSION['page']['name']       , $buffer);
    $buffer = str_replace('%IMAGE%', $_SESSION['page']['thumbnail']  , $buffer);
    $buffer = str_replace('%DESCR%', $_SESSION['page']['description'], $buffer);
    $buffer = str_replace('%CANON%', $_SESSION['page']['canonical']  , $buffer);

    return $buffer;
});

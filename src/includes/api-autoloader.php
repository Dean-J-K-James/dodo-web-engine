<?php

spl_autoload_register(function ($class_name)
{
    include_once 'includes/api/' . $class_name . '.php';
});

<?php

session_name(getenv("SESSION_NAME"));
session_start();

define("BRAND", $_REQUEST['brand']);

set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . '/application/' . BRAND . ';');
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . '/src;');

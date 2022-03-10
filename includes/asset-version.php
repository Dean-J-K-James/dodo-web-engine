<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<?php

function load_asset($asset_name)
{
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/application/" . BRAND . "/" . $asset_name))
    {
        return "/application/" . BRAND . "/" . $asset_name;
    }

    return "/src/" . $asset_name;
}

function load_file($file_name)
{
    return $_SERVER['DOCUMENT_ROOT'] . load_asset($file_name);
}

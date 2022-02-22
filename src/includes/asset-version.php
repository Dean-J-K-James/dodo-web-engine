<!---------------------------------------------------------->
<!-- Dean James - Pangean Flying Cactus - The Coding Dodo -->
<!---------------------------------------------------------->

<?php

function load_asset($asset_name)
{
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/application/" . BRAND . "/" . $asset_name))
    {
        return "/application/" . BRAND . "/" . $asset_name . "?version=v1-0-7";
    }

    return "/src/" . $asset_name . "?version=v1-0-7";
}

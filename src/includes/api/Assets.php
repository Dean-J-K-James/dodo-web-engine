<?php

/**
 * 
 */
class Assets
{

    public static function GetBrandAsset($fileName)
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . APPPATH . "/application/" . BRAND . "/" . $fileName))
        {
            return APPPATH . "/application/" . BRAND . "/" . $fileName;
        }

        return APPPATH . "/src/" . $fileName;
    }

    public static function LoadBrandFile($fileName)
    {
        return $_SERVER['DOCUMENT_ROOT'] . self::GetBrandAsset($fileName);
    }

    public static function CreateAddress($pageLink)
    {
        return APPPATH . "/" . $pageLink;
    }

}

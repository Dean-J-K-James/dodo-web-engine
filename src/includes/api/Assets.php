<?php

/**
 * 
 */
class Assets
{

    public static function LoadAsset($fileName)
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . APPPATH . "/application/" . BRAND . "/" . $fileName))
        {
            return APPPATH . "/application/" . BRAND . "/" . $fileName;
        }

        return APPPATH . "/src/" . $fileName;
    }

    public static function GetBrandAsset($fileName)
    {
        return self::LoadAsset($fileName) . '?version=' . VERSION;
    }

    public static function LoadBrandFile($fileName)
    {
        return $_SERVER['DOCUMENT_ROOT'] . self::LoadAsset($fileName);
    }

    public static function CreateAddress($pageLink)
    {
        return APPPATH . "/" . $pageLink;
    }

}

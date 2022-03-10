<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<?php

/**
 * 
 */
class Page
{

    /**
     * 
     */
    public static function selectDB($brand, $page)
    {
        global $dbh;

        $sth = $dbh->prepare("SELECT * FROM pages WHERE brand = :brand AND page = :page");
        $sth->bindParam(':brand', $brand, PDO::PARAM_STR);
        $sth->bindParam(':page' , $page, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

}

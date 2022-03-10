<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<?php

/**
 * 
 */
class PageSections
{

    /**
     * 
     */
    public static function selectDB($page, $type)
    {
        global $dbh;

        $sth = $dbh->prepare("SELECT * FROM sections WHERE page = :page AND type = :type");
        $sth->bindParam(':page', $page, PDO::PARAM_STR);
        $sth->bindParam(':type', $type, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
    
}

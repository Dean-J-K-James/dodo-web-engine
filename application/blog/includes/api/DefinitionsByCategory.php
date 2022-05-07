<?php

/**
 * 
 */
class DefinitionsByCategory
{

    /**
     * 
     */
    public static function selectDB($category)
    {
        global $dbh;

        $sth = $dbh->prepare("SELECT name, slug, description, date FROM blogs WHERE category = :category AND active = 1");
        $sth->bindParam(':category', $category, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

}

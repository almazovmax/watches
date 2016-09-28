<?php
class Category
{
    /**
     *  Returns an array of menu
     */
    public static function getCategoryList ()
    {
        $db = Db::getConnection();
        $categoryList = array();
        $result = $db -> query('SELECT id, name, status, sort_order FROM category ORDER BY status DESC ');
        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $i=0;
        while ($row = $result -> fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['status'] = $row['status'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $i++;
        }

        return $categoryList;
    }
}
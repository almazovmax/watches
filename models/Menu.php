<?php

class Menu
{
    /**
     *  Returns an array of menu
     */
    public static function getMenuList ()
    {
        $db = Db::getConnection();
        $menuList = array();
        $result = $db -> query('SELECT id, name FROM mainMenu ORDER BY id ASC ');
        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $i=0;
        while ($row = $result -> fetch()) {
            $menuList[$i]['id'] = $row['id'];
            $menuList[$i]['name'] = $row['name'];
            $i++;
        }


        //print_r($menuList); die();


        return $menuList;
    }
}
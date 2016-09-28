<?php

class Product
{
    const SHOW_BY_DEFAULT = 12;

    /**
     * Returns an array of products
     */

    public static function getLatestProducts ($page = 1, $brand = false, $sex = 'all', $count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        if($brand) {
            $result = $db->query('SELECT id, name, price, image, sale, brand FROM product WHERE status = "1" AND brand = "' . $brand . '" ORDER BY id DESC LIMIT ' . $count . ' OFFSET '. $offset);

            $i = 0;
            while ($row = $result->fetch()) {
                $productsList[$i]['id'] = $row['id'];
                $productsList[$i]['name'] = $row['name'];
                $productsList[$i]['image'] = $row['image'];
                $productsList[$i]['price'] = $row['price'];
                $productsList[$i]['sale'] = $row['sale'];
                $productsList[$i]['brand'] = $row['brand'];
                $i++;
            }
        }
        else {
            switch ($sex) {
                case 'all':
                    $result = $db->query('SELECT id, name, price, image, sale, brand FROM product WHERE status = "1" ORDER BY id DESC LIMIT ' . $count . ' OFFSET '. $offset);
                    break;
                case 'women':
                    $result = $db->query('SELECT id, name, price, image, sale, brand FROM product WHERE status = "1" AND sex = "women" ORDER BY id DESC LIMIT ' . $count . ' OFFSET '. $offset);
                    break;
                case 'men':
                    $result = $db->query('SELECT id, name, price, image, sale, brand FROM product WHERE status = "1" AND sex = "men" ORDER BY id DESC LIMIT ' . $count . ' OFFSET '. $offset);
                    break;
                case 'brand':
                    $result = $db->query('SELECT id, brand, logo, is_new, link FROM brand LIMIT '.$count.' OFFSET '. $offset);
                    break;
            }

            if ($sex == 'brand') {

                $i = 0;
                while ($row = $result->fetch()) {
                    $productsList[$i]['id'] = $row['id'];
                    $productsList[$i]['brand'] = $row['brand'];
                    $productsList[$i]['logo'] = $row['logo'];
                    $productsList[$i]['is_new'] = $row['is_new'];
                    $productsList[$i]['link'] = $row['link'];
                    $i++;
                }

            } else {
                $i = 0;
                while ($row = $result->fetch()) {
                    $productsList[$i]['id'] = $row['id'];
                    $productsList[$i]['name'] = $row['name'];
                    $productsList[$i]['image'] = $row['image'];
                    $productsList[$i]['price'] = $row['price'];
                    $productsList[$i]['sale'] = $row['sale'];
                    $productsList[$i]['brand'] = $row['brand'];
                    $i++;
                }
            }
        }
        return $productsList;
    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if($id) {
            $db = Db::getConnection();
            $result = $db -> query('SELECT * FROM product WHERE id = '.$id);
            $result -> setFetchMode(PDO::FETCH_ASSOC);

            return $result -> fetch();
        }
    }
    public static function getRecommendedProduct()
    {

        $db = Db::getConnection();

        $id = $db -> query('SELECT id FROM product WHERE is_recommended = 1');

        $i=0;
        while ($row = $id -> fetch()) {
            $idn[$i] = $row['id'];
            $i++;
        }

        $idn = array_flip($idn);                //меняем значение с ключами
        $idn = array_rand($idn, 3);             //возвращает массив ключей трех любых элементов

        $result = $db -> query('SELECT id, name, price, image, sale, brand FROM product WHERE status = "1" AND id in ( '.$idn[0].','.$idn[1].','.$idn[2].')');
        $result -> setFetchMode(PDO::FETCH_ASSOC);

        $j=0;
        while ($row = $result -> fetch()) {
            $product[$j]['id'] = $row['id'];
            $product[$j]['name'] = $row['name'];
            $product[$j]['image'] = $row['image'];
            $product[$j]['price'] = $row['price'];
            $product[$j]['sale'] = $row['sale'];
            $product[$j]['brand'] = $row['brand'];
            $j++;
        }

        return $product;

    }
    public static function getTotalProductsInCategory ($brand, $sex)
    {
        $db = Db::getConnection();

        if($brand) {
            $result = $db->query('SELECT COUNT(id) AS COUNT FROM product WHERE brand = "'.$brand.'" AND status = 1');
            $result -> setFetchMode(PDO::FETCH_ASSOC);
            $row = $result -> fetch();
        }
        else {
            switch ($sex) {
                case 'all':
                    $result = $db->query('SELECT COUNT(id) AS COUNT FROM product WHERE status = 1');
                    break;
                case 'women':
                    $result = $db->query('SELECT COUNT(id) AS COUNT FROM product WHERE status = 1 AND sex = "women"');
                    break;
                case 'men':
                    $result = $db->query('SELECT COUNT(id) AS COUNT FROM product WHERE status = 1 AND sex = "men"');
                    break;
                case 'brand':
                    $result = $db->query('SELECT COUNT(id) AS COUNT FROM brand ');
                    break;
            }
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
        }
        return $row['COUNT'];
    }
}
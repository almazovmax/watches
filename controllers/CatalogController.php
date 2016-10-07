<?php

class CatalogController
{
    public function actionIndex($page = 1, $brand = false, $sex = 'all')
    {

        if($sex == 'all' or $sex == 'men' or $sex == 'women' or $sex == 'brand') {
            if ($brand) {
                $activ = ucfirst($brand);
                $active = true;
            } else {
                if ($sex == 'all') {
                    $activ = 'Catalog';
                } else {
                    $activ = ucfirst($sex);
                }
                $active = false;
            }

            $total = Product::getTotalProductsInCategory($brand, $sex);

            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

            $latestProduct = array();
            $latestProduct = Product::getLatestProducts($page, $brand, $sex);

            require_once ROOT . '/views/catalog/index.php';

            return true;
        }
        else {
            return false;
        }
    }
}

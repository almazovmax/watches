<?php

class SiteController
{
    public function actionIndex()
    {

        $latestProduct = array();
        $latestProduct = Product::getLatestProducts($page = 1, $brand = false, $sex = 'all',  8);

        require_once ROOT.'/views/site/index.php';
        return true;
    }
}
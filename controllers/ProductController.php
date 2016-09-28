<?php

include_once ROOT.'/models/Product.php';

class ProductController
{
    public function actionView($productId)
    {

        $product = Product::getProductById($productId);
        $recommended = Product::getRecommendedProduct();

        require_once ROOT.'/views/product/view.php';
        return true;
    }
}
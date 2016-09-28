<?php
return array(
    //Каталог товаров
    'product/([0-9]+)' => 'product/view/$1',                             //actionList in ProductController
    'catalog/([a-z]+)/([a-z]+)/page-([0-9]+)' => 'catalog/index/$3/$2/$1',
    'catalog/([a-z]+)/page-([0-9]+)' => 'catalog/index/$2/0/$1',
    'catalog/([a-z]+)/([a-z]+)' => 'catalog/index/1/$2/$1',
    'catalog/page-([0-9]+)' => 'catalog/index/$1',
    'catalog/([a-z]+)' => 'catalog/index/1/0/$1',
    'catalog' => 'catalog/index',
    //регистрация пользователя
    'register' => 'user/register',
    '' => 'site/index',                                    //actionIndex in SiteController
    'news' => 'news/index',                              //actionIndex in NewsController
    'news/([0-9]+)' => 'news/view/$1'                     //actionIndex in NewsController
);
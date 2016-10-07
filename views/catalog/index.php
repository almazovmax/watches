<?php include ROOT.'/views/layouts/header.php'; ?>
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <?php if($active):?>
                    <li><a href="/catalog/brand">Brand</a></li>
                    <li class="active"><?= $activ; ?></li>
                <?php else:?>
                    <li class="active"><?= $activ; ?></li>
                <?php endif;?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--prdt-starts-->
<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-9 prdt-left">
                <div class="product-one">
                    <?php if($activ == 'Brand'):?>
                        <?php foreach ($latestProduct as $brand):?>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="/catalog/brand/<?= $brand['link'];?>" class="mask"><img class="img-responsive zoom-img" src="<?= $brand['logo']?>" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3><?= $brand['brand']?></h3>
                                        <p>Explore now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ <?= $brand['id']?></span></h4>
                                    </div>
                                    <?php if($brand['is_new']):?>
                                        <div class="srch srch1">
                                            <span>NEW</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?else: ?>
                        <?php foreach ($latestProduct as $product):?>
                        <div class="col-md-4 product-left p-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="/product/<?= $product['id']?>" class="mask"><img class="img-responsive zoom-img" src="<?= $product['image']?>" alt="" /></a>
                                <div class="product-bottom">
                                    <h3><?= $product['brand']?></h3>
                                    <p><?= $product['name']?></p>
                                </div>
                                <?php if($product['sale']):?>
                                    <div class="srch srch1">
                                        <span>-<?= $product['sale']?>%</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach;?>
                    <?endif;?>
                    <div class="clearfix"></div>
                    <div class="pagenatin">
                        <div class="col-md-6">
                            <nav>
                                <?php echo $pagination -> get(); ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 prdt-right">
                <div class="w_sidebar">
                    <section  class="sky-form">
                        <h4>Categories</h4>
                        <div class="row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>
                            </div>
                        </div>
                    </section>
                    <section  class="sky-form">
                        <h4>Brand</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Omax</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sports</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fossil</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Maxima</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yepme</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diesel</label>
                            </div>
                        </div>
                    </section>
                    <section class="sky-form">
                        <h4>Colour</h4>
                        <ul class="w_nav2">
                            <li><a class="color1" href="#"></a></li>
                            <li><a class="color2" href="#"></a></li>
                            <li><a class="color3" href="#"></a></li>
                            <li><a class="color4" href="#"></a></li>
                            <li><a class="color5" href="#"></a></li>
                            <li><a class="color6" href="#"></a></li>
                            <li><a class="color7" href="#"></a></li>
                            <li><a class="color8" href="#"></a></li>
                            <li><a class="color9" href="#"></a></li>
                            <li><a class="color10" href="#"></a></li>
                            <li><a class="color12" href="#"></a></li>
                            <li><a class="color13" href="#"></a></li>
                            <li><a class="color14" href="#"></a></li>
                            <li><a class="color15" href="#"></a></li>
                            <li><a class="color5" href="#"></a></li>
                            <li><a class="color6" href="#"></a></li>
                            <li><a class="color7" href="#"></a></li>
                            <li><a class="color8" href="#"></a></li>
                            <li><a class="color9" href="#"></a></li>
                            <li><a class="color10" href="#"></a></li>
                        </ul>
                    </section>
                    <section class="sky-form">
                        <h4>discount</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
                            </div>
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!--product-end-->
<?php include ROOT.'/views/layouts/footer.php'; ?>
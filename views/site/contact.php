<?php include ROOT.'/views/layouts/header.php'; ?>

    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--contact-start-->
    <div class="contact">
        <div class="container">
            <div class="contact-top heading">
                <h2>CONTACT</h2>
            </div>
            <div class="contact-text">
                <div class="col-md-3 contact-left">
                    <div class="address">
                        <h5>Address</h5>
                        <p>Luxury Watches,
                            <span>Belarus, Minsk,</span>
                             Independent avenu, 15.</p>
                    </div>
                    <div class="address">
                        <h5>Contact</h5>
                        <p>+375 25 777 1 777
                            <span>Fax:+375 17 377 1 777</span>
                            Email: <a href="mailto:example@email.com">contact@example.com</a></p>
                    </div>
                </div>
                <?php if ($result): ?>
                    <div class="col-md-9 contact-right"><p>Письмо успешно отправлено! Мы вам ответим в ближайшее время! :)</p></div>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <?php $i = 1; foreach ($errors as $error):?>
                            <div class="col-md-3 infor-left">
                                <ul>
                                    <li style="color: red"><?= $i?>. <?= $error?></li>
                                </ul>
                            </div>
                        <?php $i++; endforeach;?>
                    <?php endif;?>
                        <div class="col-md-9 contact-right">
                            <form action="#" method="post">
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="text" name="phone" placeholder="Phone">
                                <input type="email" name="email"  placeholder="Email" required>
                                <textarea name="message" placeholder="Message" required=""></textarea>
                                <div class="submit-btn">
                                    <input type="submit" value="SUBMIT">
                                </div>
                            </form>
                        </div>
                    <?php endif;?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--contact-end-->
    <!--map-start-->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=%D0%9F%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82%20%D0%BD%D0%B5%D0%B7%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8%2015&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" style="border:0"></iframe>
    </div>
    <!--map-end-->

<?php include ROOT.'/views/layouts/footer.php'; ?>
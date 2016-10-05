<?php include ROOT.'/views/layouts/header.php'; ?>

<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Account</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--account-starts-->
<div class="account">
    <div class="container">
        <div class="account-top heading">
            <h2>ACCOUNT</h2>
        </div>
        <?php if (isset($errors) && is_array($errors)): ?>
            <?php $i = 1; foreach ($errors as $error):?>
                <div class="col-md-3 infor-left">
                    <ul>
                        <li style="color: red"><?= $i?>. <?= $error?></li>
                    </ul>
                </div>
                <?php $i++; endforeach;?>
        <?php endif;?>
        <div class="clearfix"></div>
        <div class="account-main">
            <div class="col-md-6 account-left">
                <h3>Existing User</h3>
                <form action="#" class="account-bottom">
                    <input placeholder="Email" type="email" name="email" tabindex="3" value="<?= $email;?>" required>
                    <input placeholder="Password" type="password" name="password" tabindex="4" required>
                    <div class="address">
                        <a class="forgot" href="#">Forgot Your Password?</a>
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
            <div class="col-md-6 account-right account-left">
                <h3>New User? Create an Account</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a href="/register">Create an Account</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--account-end-->

<?php include ROOT.'/views/layouts/footer.php'; ?>

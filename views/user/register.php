<?php include ROOT.'/views/layouts/header.php'; ?>

<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--register-starts-->
<div class="register">
    <div class="container">
        <div class="register-top heading">
            <h2>REGISTER</h2>
        </div>
        <form class="register-main" action="red.php" method="post">
            <div class="col-md-6 account-left">
                <h5><label for="user_name">First name</label></h5>
                <input placeholder="First name" type="text" name="firstName" tabindex="1" required>
                <h5><label for="user_name">Last name</label></h5>
                <input placeholder="Last name" type="text" name="lastName" tabindex="2" required>
                <h5><label for="phone">Mobile phone</label></h5>
                <input placeholder="Mobile" type="text" name="phone" tabindex="3" required>
                <ul>
                    <li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Male</label></li>
                    <li><label class="radio"><input type="radio" name="radio"><i></i>Female</label></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="col-md-6 account-left">
                <h5><label for="email">E-mail</label></h5>
                <input placeholder="Email address" type="email" name="email" tabindex="3" required>
                <h5><label for="password">Password</label></h5>
                <input placeholder="Password" type="password" name="password" tabindex="4" required>
                <h5><label for="password">Retype password</label></h5>
                <input placeholder="Retype password" type="password" name="password2" tabindex="4" required>
            </div>
            <div class="clearfix"></div>
            <div class="address submit">
                <input type="submit" name="submit" value="Sign Up">
            </div>
        </form>
    </div>
</div>
<!--register-end-->

<?php if($_SERVER['REQUEST_METHOD'] == 'POST') : ?>

<script>
    swal('1','2','error');
</script>
<?php endif;?>

<?php include ROOT.'/views/layouts/footer.php'; ?>

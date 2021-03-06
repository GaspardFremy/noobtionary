<?php $title = 'login'; ?>

<?php $css = '<link rel="stylesheet" href="./public/css/login.css">' ?>

<?php ob_start(); ?>

    <div class="inner-mobile-container m-auto">

        <h2 class="white-text text-center pt-5">Noobtionary</h2>

        <form class="pt-5" method="post" action='./controller/login.php'>
            <!-- Material input email -->
            <div class="md-form mt-5">
                <input placeholder="&zwnj;" type="text" id="materialFormRegisterEmailEx" class="form-control" name="login_email">
                <label for="materialFormRegisterEmailEx">Your email</label>
            </div>

            <!-- Material input password -->
            <div class="md-form mt-5">
                <input placeholder="&zwnj;" type="text" id="materialFormRegisterPasswordEx" class="form-control" name="login_password">
                <label for="materialFormRegisterPasswordEx">Your password</label>
            </div>

            <div class="text-center mt-5">
                <input type="submit" class="white-text" value="SUBMIT">
            </div>
        </form>

</div>

<a href="./index.php?action=signin" class="text-center m-5 white-text"><p>Signin</p></a>


<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>

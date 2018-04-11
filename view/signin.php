<?php $title = 'signin'; ?>

<?php $css = '<link rel="stylesheet" href="./public/css/login.css">' ?>

<?php ob_start(); ?>


    <h2 class="white-text text-center pt-5">Noobtionary</h2>


<div class="inner-mobile-container m-auto">
    <form class="pt-5">
        <!-- Material input text -->
        <div class="md-form">
            <input placeholder="&zwnj;" type="text" id="materialFormRegisterNameEx" class="form-control">
            <label for="materialFormRegisterNameEx">Your name</label>
        </div>

        <!-- Material input email -->
        <div class="md-form mt-5">
            <input placeholder="&zwnj;" type="email" id="materialFormRegisterEmailEx" class="form-control">
            <label for="materialFormRegisterEmailEx">Your email</label>
        </div>

        <!-- Material input password -->
        <div class="md-form mt-5">
            <input placeholder="&zwnj;" type="text" id="materialFormRegisterPasswordEx" class="form-control">
            <label for="materialFormRegisterPasswordEx">Your password</label>
        </div>

        <!-- Material input password -->
        <div class="md-form mt-5">
            <input placeholder="&zwnj;" type="text" id="materialFormRegisterConfirmPassword" class="form-control">
            <label for="materialFormRegisterConfirmPassword">Confirm Your password</label>
        </div>

        <div class="text-center mt-5">
            <input type="submit" name="" class="white-text" value="SUBMIT">
        </div>
    </form>
</div>

<a href="./index.php?action=login" class="text-center m-5 white-text"><p>login</p></a>


<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>

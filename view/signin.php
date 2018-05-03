<?php $title = 'signin'; ?>

<?php $css = '<link rel="stylesheet" href="./public/css/login.css">' ?>

<?php ob_start(); ?>


<h2 class="white-text text-center pt-5">Noobtionary</h2>


<div class="inner-mobile-container m-auto">
    <form class="pt-5"  method="post" action='./controller/signin.php'>
        <!-- Material input text -->
        <div class="md-form">
            <input placeholder="&zwnj;" type="text" id="materialFormRegisterNameEx" class="form-control" name="name" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>">
            <label for="materialFormRegisterNameEx">Your name</label>
        </div>

        <!-- Material input email -->
        <div class="md-form mt-5">
            <input placeholder="&zwnj;" type="text" id="materialFormRegisterEmailEx" class="form-control" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>">
            <label for="materialFormRegisterEmailEx">Your email</label>
        </div>

        <!-- Material input password -->
        <div class="md-form mt-5">
            <input placeholder="&zwnj;" type="text" id="materialFormRegisterPasswordEx" class="form-control" name="password">
            <label for="materialFormRegisterPasswordEx">Your password</label>
        </div>

        <!-- Material input password -->
        <div class="md-form mt-5">
            <input placeholder="&zwnj;" type="text" id="materialFormRegisterConfirmPassword" class="form-control" name="confirm_password">
            <label for="materialFormRegisterConfirmPassword">Confirm Your password</label>
        </div>

        <div class="text-center mt-5">
            <input type="submit" name="" class="white-text" value="SUBMIT">
        </div>

        <?php if(isset($_GET['error']) AND !empty($_GET['error']))
        {?>
          <div class="alert alert-danger" role="alert"><?php
              echo $_GET['error'];?>
          </div><?php
        }?>

    </form>
</div>

<a href="./index.php?action=login" class="text-center m-5 white-text"><p>login</p></a>


<?php $content = ob_get_clean(); ?>

<?php require('./view/template.php'); ?>

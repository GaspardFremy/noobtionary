<?php $title = 'new'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>

<div class="spacer-container">
    <div class="inner-mobile-container m-auto">
        <h5 class="sub-header">Edit account</h5>

        <form class="pt-4" method="post" action="./index.php?action=updateAccount">

            <!-- Material input -->
            <div class="md-form pb-3">
                <input placeholder="&zwnj;" type="text" id="inputName" class="form-control" name="name" value='<?=$data['name']?>'>
                <label for="inputName" class="noob-color-font">name</label>
            </div>

            <!--Basic textarea-->
            <div class="md-form pb-3">
                <input placeholder="&zwnj;" type="email" class="form-control" name="email" value='<?=$data['email']?>'>
                <label for="textareaBasic">email</label>
            </div>

            <!-- Material input -->
            <div class="md-form pb-3">
                <input placeholder="&zwnj;" type="password" id="inputPassword" name="password" class="form-control">
                <label for="inputPassword">password <span style="color: red">*</span></label>
            </div>

            <!-- Material input -->
            <div class="md-form pb-3">
                <input placeholder="&zwnj;" type="password" id="inputNewPassword" name="new_password" class="form-control">
                <label for="inputNewPassword">New password</label>
            </div>

            <!-- Material input -->
            <div class="md-form pb-3">
                <input placeholder="&zwnj;" type="password" id="inputConfirmPassword" name="confirm_password" class="form-control">
                <label for="inputConfirmPassword">Confirm password</label>
            </div>

            <?php if(isset($_GET['error']) AND !empty($_GET['error']))
            {?>
              <div class="alert alert-danger" role="alert"><?php
                  echo $_GET['error'];?>
              </div><?php
            }?>

            <?php if(isset($_GET['success']) AND !empty($_GET['success']))
            {?>
              <div class="alert alert-success" role="alert"><?php
                  echo $_GET['success'];?>
              </div><?php
            }?>

            <div class="text-center mt-4">
                <input type="submit" class="noob-color-font" value="SAVE">
            </div>
        </form>
    <!-- end inner-mobile-container -->
    </div>
</div>

<?php $footernav = 'activate'; ?>

<?php $page = 'addDef'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

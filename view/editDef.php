<?php $title = 'new'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>


<p>p</p>
<hr>
<hr>
<hr>

<div class="inner-mobile-container m-auto">
    <h5 class="sub-header">Edit your definition</h5>

    <form class="pt-4">

        <!-- Material input -->
        <div class="md-form pb-3">
            <input placeholder="&zwnj;" type="text" id="inputPlaceholderEx" class="form-control">
            <label for="inputPlaceholderEx" class="noob-color-font">Title</label>
        </div>

        <!--Basic textarea-->
        <div class="md-form pb-3">
            <textarea placeholder="&zwnj;" type="text" id="textareaBasic" class="form-control md-textarea" rows="3"></textarea>
            <label for="textareaBasic">Content</label>
        </div>

        <!-- Material input -->
        <div class="md-form pb-3">
            <input placeholder="&zwnj;" type="text" id="inputPlaceholderEx" class="form-control">
            <label for="inputPlaceholderEx">Synonym</label>
        </div>

        <div class="text-center mt-5">
            <input type="submit" name="" class="noob-color-font" value="EDIT">
        </div>
    </form>
<!-- end inner-mobile-container -->
</div>





<?php $footernav = 'activate'; ?>

<?php $page = 'addDef'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
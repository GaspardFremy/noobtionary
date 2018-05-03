<?php $title = 'new'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>

<div class="spacer-container">
    <div class="inner-mobile-container m-auto">
        <h5 class="sub-header">Edit your definition</h5>

        <form class="pt-4" method="post" action="./index.php?action=updateDef&id=<?= $definition['id']?>">

            <!-- Material input -->
            <div class="md-form pb-3">
                <input placeholder="&zwnj;" type="text" id="inputPlaceholderEx" class="form-control" value="<?= $definition['title'] ?>" name="edit_title">
                <label for="inputPlaceholderEx" class="noob-color-font">Title</label>
            </div>

            <!--Basic textarea-->
            <div class="md-form pb-3">
                <textarea placeholder="&zwnj;" type="text" id="textareaBasic" class="form-control md-textarea pt-0 " rows="6" name="edit_content"><?= $definition['content'] ?></textarea>
                <label for="textareaBasic">Content</label>
            </div>

            <!-- Material input -->
            <div class="md-form pb-3">
                <input placeholder="&zwnj;" type="text" id="inputPlaceholderEx" class="form-control" value="<?= $definition['synonym'] ?>" name="edit_synonym">
                <label for="inputPlaceholderEx">Synonym</label>
            </div>

            <div class="text-center mt-3">
                <input type="submit" name="" class="noob-color-font" value="EDIT">
            </div>
        </form>
    <!-- end inner-mobile-container -->
    </div>
</div>

<?php $footernav = 'activate'; ?>

<?php $page = 'addDef'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

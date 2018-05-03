<?php $title = 'definition'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>

<div class="spacer-container">
    <div class="inner-mobile-container m-auto">
        <a href="javascript:history.go(-1)"><i class="zmdi zmdi-long-arrow-left mt-2 mb-3"></i></a>
        <div class="flex-column align-items-start">
            <div class="d-flex w-100 flex-column">

            <h5 class="mb-1 title-def"><?= $definition['title'] ?></h5>
            <small>By <a href="index.php?action=userProfil&id=<?= $definition['authorID']?>&name=<?= $definition['name']?>"> <span class="noob-color-font"><?= $definition['name']?></span></a></small>
            </div>

            <p class="mb-1 mt-2 noob-grey">
                <?= $definition['content'] ?>
            </p>

            <div class="d-flex align-items-center">
                <div class="upvote" id="upvote_<?= $definition['id']?>">
                    <small class="upvote_<?= $definition['id']?> upvote vote<?php if(isset($status_result) AND $status_result['type'] == 1){echo "1"; }?> "><span id="upvotes_<?= $definition['id']?>" ><?php print_r($total_upvotes['ctnUp']);?></span> </small>
                    <span><i class="upvote_<?= $definition['id']?> zmdi zmdi-caret-up zmdi-hc-2x ml-1 upvote vote<?php if(isset($status_result) AND $status_result['type'] == 1){echo "1"; }?>"></i></span>
                </div>

                <div class="downvote" id="downvote_<?= $definition['id']?>">
                    <small class="downvote_<?= $definition['id']?> ml-3 downvote vote<?php if(isset($status_result) AND $status_result['type'] == 2){echo "2"; }?>"><span id="downvotes_<?= $definition['id']?>" ><?php  print_r($total_downvotes['ctnDown']);?></span></small>
                    <span><i class="downvote_<?= $definition['id']?> zmdi zmdi-caret-down zmdi-hc-2x ml-1 downvote vote<?php if(isset($status_result) AND $status_result['type'] == 2){echo "2"; }?>"></i></span>
                </div>
            </div>

            <span id="type"></span>

        </div>

        <form>
            <div class="md-form noob-color-font">
                <input type="text" id="commentinput" class="form-control">
                <label for="commentinput">Leave a comment</label>
            </div>

            <div>
                <input type="submit" class="noob-color-font p-0" value="Submit">
            </div>
        </form>
    <!-- End inner-mobile-container -->
    <h5 class="my-3">Comments</h5>
    </div>

    <div class="list-group comment-container">
        <?php while ($data = $comments->fetch()) {?>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 flex-column">
                    <small>By <a href="#"></a> <span class="noob-color-font"><?=$data['username'];?></span></small>
                </div>
                <p class="mb-1 mt-2 noob-grey"><?= $data['content'];?></p>
            </div>
        <?php }?>
    </div>
</div>



<?php $footernav = 'activate'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

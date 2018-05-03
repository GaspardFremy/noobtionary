<?php $title = 'new'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>

<div class="spacer-container">
    <div class="inner-mobile-container m-auto">
        <h5 class="sub-header"><?= $_GET['name'] ?>'s definitions</h5>
    </div>
    <div class="list-group">
        <?php while ($data = $theirDefinitions->fetch()) {?>
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 flex-column">
                <h5 class="mb-1 title-def"><?php echo substr($data['title'],0,66); if (iconv_strlen($data['title']) > 30) {echo "...";}?></h5>
                <small>By <a href="#"></a> <span class="noob-color-font"><?= $data['name']; ?></span></small>
                </div>
                <a href="#">
                    <p class="mb-1 mt-2 noob-grey"><?php echo substr($data['content'],0,120); if (iconv_strlen($data['content']) > 120) {echo "...";}?></p>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="upvote" id="upvote_<?= $data['id']?>">
                            <small class="upvote_<?= $data['id']?> upvote vote<?php if(isset($status_result) AND $status_result['type'] == 1){echo "1"; }?> "><span id="upvotes_<?= $data['id']?>" ><?php print_r($data['totalUpvotes']);?></span> </small>
                            <span><i class="upvote_<?= $data['id']?> zmdi zmdi-caret-up zmdi-hc-2x ml-1 upvote vote<?php if(isset($status_result) AND $status_result['type'] == 1){echo "1"; }?>"></i></span>
                        </div>

                        <div class="downvote" id="downvote_<?= $data['id']?>">
                            <small class="downvote_<?= $data['id']?> ml-3 downvote vote<?php if(isset($status_result) AND $status_result['type'] == 2){echo "2"; }?>"><span id="downvotes_<?= $data['id']?>" ><?php  print_r($data['totalDownvotes']);?></span></small>
                            <span><i class="downvote_<?= $data['id']?> zmdi zmdi-caret-down zmdi-hc-2x ml-1 downvote vote<?php if(isset($status_result) AND $status_result['type'] == 2){echo "2"; }?>"></i></span>
                        </div>
                    </div>
                    <a href="index.php?action=definition&id=<?= $data['id']; ?>"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
                </div>
            </div>
            <?php
        }?>
    </div>
</div>

<?php $footernav = 'activate'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

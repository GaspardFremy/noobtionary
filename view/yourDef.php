<?php $title = 'new'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>

<div class="spacer-container">
    <!-- Settings Modal -->
    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="m-auto p-2">
                    <div class="d-flex">
                        <a href="index.php?action=editDef&id=2" id="modalEdit"> <p class="noob-color-font px-5">EDIT</p></a>
                        <a href="#" data-toggle="modal" data-target="#deletModal"> <p class="noob-color-font px-5">DELETE</p></a>
                    </div>

                </div>

                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- Delet alert Modal -->
    <div class="modal fade" id="deletModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="m-auto p-2">
                    <p class="sub-header">Deleted definitions are gone forever. <br>Are you sure?</p>

                    <div class="d-flex justify-content-around">
                        <a href="#"> <p class="noob-color-font" data-dismiss="modal">CANCEL</p></a>
                        <a href="#" id="modalDelete"> <p class="noob-color-font">DELETE</p></a>
                    </div>

                </div>

                <div class="modal-footer">&zwnj;</div>
            </div>
        </div>
    </div>

    <div class="inner-mobile-container m-auto">
        <h5 class="sub-header">Your definitions</h5>
    </div>

    <?php if(isset($_GET['success']) AND !empty($_GET['success']))
    {?>
      <div class="alert alert-success" id="success" role="alert"><?php
          echo $_GET['success'];?>
      </div><?php
    }?>

    <div class="list-group">
        <?php while ($data = $theirDefinitions->fetch()) {?>
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 flex-column">

                <div class="d-flex justify-content-between">
                    <h5 class="mb-1 title-def"><?php echo substr($data['title'],0,66); if (iconv_strlen($data['title']) > 30) {echo "...";}?></h5>
                    <i class="zmdi zmdi-more-vert zmdi-hc-2x option" data-toggle="modal" data-id="<?= $data['id']?>" data-target="#centralModalSm"></i>
                </div>

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
        <?php } ?>
    </div>
</div>


<?php $footernav = 'activate'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

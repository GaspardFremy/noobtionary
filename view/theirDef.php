<?php $title = 'new'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>


<p>p</p>
<hr>
<hr>
<hr>


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
                    <small class="noob-light-green rank">1k</small>
                    <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                    <small class="ml-3 noob-light-red rank">1k</small>
                    <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
                </div>
                <a href="index.php?action=definition&id=<?= $data['id']; ?>"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
            </div>
        </div>
        <?php
    }?>
</div>

<hr>
<hr>
<hr>

<?php $footernav = 'activate'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

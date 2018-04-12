<?php $title = 'definition'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>


<p>p</p>
<hr>
<hr>
<hr>


<div class="inner-mobile-container m-auto">
    <a href="index.php?action=newOnes"><i class="zmdi zmdi-long-arrow-left mt-2 mb-3"></i></a>
    <div class="flex-column align-items-start">
        <div class="d-flex w-100 flex-column">
        <h5 class="mb-1 title-def"><?= $definition['title'] ?></h5>
        <small>By <a href="index.php?action=userProfil&id=<?= $definition['authorID']?>&name=<?= $definition['name']?>"> <span class="noob-color-font"><?= $definition['name']?></span></a></small>
        </div>

        <p class="mb-1 mt-2 noob-grey">
            <?= $definition['content'] ?>
        </p>

        <div class="d-flex align-items-center">
            <small class="noob-light-green rank">1k</small>
            <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
            <small class="ml-3 noob-light-red rank">1k</small>
            <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
        </div>
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
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">
        <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>
        </div>
        <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
        </div>
    </div>

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">
        <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>
        </div>
        <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
        </div>
    </div>

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">
        <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>
        </div>
        <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
        </div>
    </div>

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">
        <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>
        </div>
        <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
        </div>
    </div>
<!-- end list-group -->
</div>



<hr>
<hr>
<hr>

<?php $footernav = 'activate'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

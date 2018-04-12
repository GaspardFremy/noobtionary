<?php $title = 'search'; ?>

<?php ob_start(); ?>

<?php $headernav = 'inactive'; ?>

<img src="./public/img/status-bar.png" class="status-bar" alt="">

<?php if(!isset($headernav)){echo '<div class="p-4"></div>';}?>


    <nav class="navbar navbar-dark noob-color headernav d-flex justify-content-between">

        <a href="index.php?action=newOnes"><i class="zmdi zmdi-long-arrow-left zmdi-hc-2x search-arrow"></i></a>

        <a class="navbar-brand title-def " href="#">Search</a>

        <form class="form-inline waves-effect waves-light">
            <a href="./index.php?action=searchPage"><i class="zmdi zmdi-search zmdi-hc-2x"></i></a>
       </form>
    </nav>



<p>p</p>
<hr>
<hr>
<hr>

<div class="inner-mobile-container m-auto">

<!-- Search form -->
<div class="md-form">
    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
</div>

<!-- end inner-mobile-container -->
</div>





<?php $footernav = 'activate'; ?>

<?php $page = 'addDef'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

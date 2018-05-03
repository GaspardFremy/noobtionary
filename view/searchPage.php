<?php
$title = 'search';?>

<?php ob_start(); ?>

<?php $headernav = 'inactive'; ?>


<?php if(!isset($headernav)){echo '<div class="p-4"></div>';}?>


    <nav class="navbar navbar-dark noob-color headernav d-flex justify-content-between">

        <a href="index.php?action=newOnes"><i class="zmdi zmdi-long-arrow-left zmdi-hc-2x search-arrow"></i></a>

        <a class="navbar-brand title-def" href="#">Search</a>

        <form class="form-inline waves-effect waves-light">
            <a href="./index.php?action=searchPage"><i class="zmdi zmdi-search zmdi-hc-2x"></i></a>
       </form>
    </nav>

<p>p</p>
<hr>
<hr>
<hr>


<div class="md-form text-center m-auto">
    <input type="text" class="form-control w-75 m-auto" type="text" placeholder="Search" aria-label="Search"  id="txt_search" name="txt_search">
</div>

<div class="list-group" id="searchResult">
        <div class="list-group-item list-group-item-action flex-column align-items-start no-border">

        </div>
</div>





<?php $footernav = 'activate'; ?>

<?php $page = 'addDef'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

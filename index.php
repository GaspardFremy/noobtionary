<?php session_start();  ?>
<?php
require('controller/controller.php');
require('controller/function.php');

try {
    if (isset($_GET['action'])) {
        //FRONTEND PAGES
        if ($_GET['action'] == '') {
            error404();
        }

        elseif ($_GET['action'] == 'newOnes') {
            newOnes();
        }

        elseif ($_GET['action'] == 'top'){
            top();

        }

        elseif ($_GET['action'] == 'addDef') {
            addDef();
        }

        elseif ($_GET['action'] == 'editDef') {
            editDef();
        }

        elseif ($_GET['action'] == 'yourDef') {
            yourDef();
        }

        elseif ($_GET['action'] == 'Definition'){
            definition();
        }

        elseif ($_GET['action'] == 'signin'){
            signin();
        }

        elseif ($_GET['action'] == 'login'){
            login();
        }

        elseif ($_GET['action'] == 'editAccount'){
            editAccount();
        }

        elseif ($_GET['action'] == 'definition'){
            definition();
        }

        elseif ($_GET['action'] == 'searchPage') {
            searchPage();
        }

    }
    else {
        login();
    }
}
catch(Exception $e) {
    $msgError = $e->getMessage();

    require 'view/frontend/msgError.php';
}

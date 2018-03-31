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

        elseif ($_GET['action'] == 'Definition'){
            definition();
        }

        elseif ($_GET['action'] == 'signin'){
            signin();
        }

        elseif ($_GET['action'] == 'login'){
            login();
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

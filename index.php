<?php session_start();  ?>
<?php
require('controller/controller.php');
require('controller/function.php');

try {
    if (isset($_SESSION['userId']) AND !empty($_SESSION['userId'])) {
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
            elseif ($_GET['action'] == 'postDef') {
                    if (!empty($_SESSION['userId']) && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['synonym'])) {
                        postDef($_SESSION['userId'], $_POST['title'], $_POST['content'], $_POST['synonym']);
                    }
                }
            elseif ($_GET['action'] == 'editDef') {
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    getEditDef($_GET['id']);
                }
            }
            elseif ($_GET['action'] == 'updateDef') {
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    updateDef($_GET['id'],$_POST['edit_title'], $_POST['edit_content'], $_POST['edit_synonym']);
                }
            }
            elseif ($_GET['action'] == 'deleteDef') {
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    deleteDef($_GET['id']);
                }
            }
            elseif ($_GET['action'] == 'yourDef') {
                yourDef($_SESSION['userId']);
            }
            elseif ($_GET['action'] == 'userProfil' && isset($_GET['id'],  $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name'])) {
                if($_GET['id'] === $_SESSION['userId']){
                    yourDef($_SESSION['userId']);
                }
                else {
                    userProfil($_GET['id'], $_GET['name']);
                }
            }
            elseif ($_GET['action'] == 'definition' && isset($_GET['id']) ){
                definition($_SESSION['userId'], $_GET['id']);
            }
            elseif ($_GET['action'] == 'vote' && isset($_POST['definitionID'], $_POST['type'] )){
                uservote($_POST['definitionID'], $_SESSION['userId'], $_POST['type']);
            }
            elseif ($_GET['action'] == 'signin'){
                signin();
            }
            elseif ($_GET['action'] == 'login'){
                login();
            }
            elseif ($_GET['action'] == 'editAccount'){
                if(isset($_SESSION['userId']) && !empty($_SESSION['userId'])){
                    editAccount($_SESSION['userId']);
                }
            }
            elseif ($_GET['action'] == 'updateAccount') {
                if(isset($_SESSION['userId']) && !empty($_SESSION['userId'])){
                    updateAccount($_SESSION['userId'], $_POST['name'], $_POST['email'], $_POST['password'], $_POST['new_password'], $_POST['confirm_password']);
                }
            }
            elseif ($_GET['action'] == 'searchPage') {
                searchPage();
            }
            elseif ($_GET['action'] == 'search') {
                if (isset($_GET['title'])){
                    searchedDefinitions($_GET['title']);
                }
                else {
                    login();
                }
            }
            elseif ($_GET['action'] == 'logout') {
                logout();
            }
        else { error404();}
        }

    }
    else {
        login();
    }
}
catch(Exception $e) {
    $msgError = $e->getMessage();
    require 'view/msgError.php';
}

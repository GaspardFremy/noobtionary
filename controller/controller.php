<?php

require('model/model.php');

function signin()
{
    require('view/signin.php');
}

function login()
{
    require('view/login.php');
}

function newOnes()
{
    $definitions = getDefinitions();
    require('view/newones.php');
}

function addDef()
{
    require('view/addDef.php');
}

function postDef($userId, $title, $content, $synonym)
{
    $affectedLines = postDefinition($userId, $title, $content, $synonym);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter la definition !');
    }
    else {
        header('Location: index.php?action=definition');
    }
}

function getEditDef($definitionID)
{
    $definition = getDefinition($definitionID);
    require('view/editDef.php');
}

function updateDef($definitionID)
{
    $editedLines = updateDefinition($id, $edit_title, $edit_content, $edit_synonym);

    if ($editedLines === false) {
        throw new Exception('Impossible d\'éditer la definition!');
    }
    else {
        header('Location: index.php?action=yourDef');
    }
}


function yourDef($authorID)
{
    $theirDefinitions = getTheirDefinitions($authorID);
    require('view/yourDef.php');
}

function userProfil($authorID, $name)
{
    $theirDefinitions = getTheirDefinitions($authorID);
    require('view/theirDef.php');
}

function top()
{
    require('view/top.php');
}

function definition($definitionID)
{
    $definition = getDefinition($definitionID);
    require('view/definition.php');
}

function editAccount()
{
    require('view/editAccount.php');
}

function searchPage()
{
    require('view/searchPage.php');
}

function logout()
{
    require('logout.php');
}

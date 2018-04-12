<?php

//For new ones page
function getDefinitions()
{
    $db = dbConnect();

    $definitions = $db->query('SELECT definitions.*, users.name
    FROM definitions
    INNER JOIN users ON definitions.authorID = users.id

    ORDER BY creationDate');

    return $definitions;
}

//For users profil
function getTheirDefinitions($authorID)
{
    $db = dbConnect();

    $theirDefinitions = $db->prepare('SELECT definitions.*, users.name
    FROM definitions
    INNER JOIN users ON definitions.authorID = users.id

    WHERE definitions.authorID = ?');

    $theirDefinitions->execute(array($authorID));

    return $theirDefinitions;
}


function getDefinition($definitionId)
{
    $db = dbConnect();

    $req = $db->prepare('SELECT definitions.*, users.name
    FROM definitions
    INNER JOIN users ON definitions.authorID = users.id

    WHERE definitions.id = ?');

    $req->execute(array($definitionId));

    $definition = $req->fetch();

    return $definition;
}


function postDefinition($userId, $title, $content, $synonym)
{
    $db = dbConnect();
    $definition = $db->prepare('INSERT INTO definitions(authorID, title, content, synonym, creationDate) VALUES(?, ?, ?, ?, NOW())');
    $affectedLines = $definition->execute(array($userId, $title, $content, $synonym));

    return $affectedLines;
}

function updateDefinition($id, $edit_title, $edit_content, $edit_synonym)
{
    $db = dbConnect();

    $edit = $db->prepare('UPDATE definitions
    SET title = :edit_title, content = :edit_content, synonym = :edit_synonym
    WHERE id = :id');

    $editedLines = $edit->execute(array(
        'edit_title' => $edit_title,
        'edit_content' => $edit_content,
        'edit_synonym' => $edit_synonym,
        'id' => $id,
    ));

    return $editedLines;
}

function getUserInfo($id)
{
    $db = dbConnect();

    $req = $db->prepare('SELECT users.*
    FROM users
    WHERE users.id = ?');

    $req->execute(array($id));

    $infoUser = $req->fetch();

    return $infoUser;
}


function updateAccountInfo($id, $name, $email, $password, $new_password, $confirm_password)
{
    $infoUser = getUserInfo($id);

    $isPasswordCorrect = password_verify($password, $infoUser['password']);

    if($isPasswordCorrect){
        if($infoUser['name'] !== $name){
            $db = dbConnect();
            $req = $db->prepare('UPDATE users SET name = :name WHERE id = :id');
            $req->execute(array(
            	'name' => $name,
            	'id' => $id,
            ));

            $success = "informations saved!";
        }

        if($infoUser['email'] !== $email){
            $success = "";

            $db = dbConnect();
            $req = $db->prepare('UPDATE users SET email = :email WHERE id = :id');
            $req->execute(array(
            	'email' => $email,
            	'id' => $id,
            ));

            $success = "informations saved!";
        }

        if (!empty($new_password) && !empty($confirm_password)){

            if(!empty($new_password) && !empty($confirm_password) && $new_password === $confirm_password){

                $new_password = password_hash($new_password, PASSWORD_DEFAULT);
                $confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);

                $db = dbConnect();
                $req = $db->prepare('UPDATE users SET password = :password WHERE id = :id');
                $req->execute(array(
                	'password' => $new_password,
                	'id' => $id,
                ));

                $success = "informations saved!";

            }
            else {
                $error = "passwords do not match";
            }
        }
    }
    else{
        $error = "invalid password";
    }

    header('location: ./index.php?action=editAccount&success='. $success .'&error='. $error);
}

function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=noobtionary;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}

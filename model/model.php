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
    WHERE definitions.authorID = ?
    ORDER BY definitions.creationDate DESC');

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

function deleteDefinition($id)
{
    $db = dbConnect();
    $delete = $db->prepare('DELETE FROM definitions
    WHERE definitions.id = ?');

    $deletedLine = $delete->execute(array($id));
    return $deletedLine;
}

function checkUserVote($userId, $definitionID)
{
    $db = dbConnect();
    $status = $db->prepare('SELECT upvotes_downvotes.*
    FROM upvotes_downvotes
    WHERE upvotes_downvotes.userID = ? AND upvotes_downvotes.defID = ? ');

    $status->execute(array($userId, $definitionID));
    $status_result = $status->fetch();
    return $status_result;
}


function getTotalUpvotes($definitionID)
{
    $db = dbConnect();
    $upvotes = $db->prepare('SELECT COUNT(*) AS ctnUp FROM upvotes_downvotes WHERE defID = ? AND type = 1');
    $upvotes->execute(array($definitionID));
    $total_upvotes = $upvotes->fetch();
    return $total_upvotes;
}

function getTotalDownvotes($definitionID)
{
    $db = dbConnect();
    $downvotes = $db->prepare('SELECT COUNT(*) AS ctnDown FROM upvotes_downvotes WHERE defID = ?  AND type = 2');
    $downvotes->execute(array($definitionID));
    $total_downvotes = $downvotes->fetch();
    return $total_downvotes;
}

function vote($definitionID, $userId, $type)
{
    //Check if user as already voted or note
    $db = dbConnect();
    $asvoted = $db->prepare('SELECT COUNT(*) AS ctnpost FROM upvotes_downvotes WHERE defID = ? AND userID = ?');
    $asvoted->execute(array($definitionID, $userId));
    $result_asvoted = $asvoted->fetch();
    $vote = $result_asvoted['ctnpost'];


    //if not, insert vote
    if($vote == 0){
        $db = dbConnect();
        $insertVote = $db->prepare('INSERT INTO upvotes_downvotes(userID, defID, type) VALUES (?, ?, ?) ');
        $insertVote->execute(array($userId, $definitionID, $type));
    }

    // TODO : putain de bugg ici
    //if yes, update vote
    else{
        $db = dbConnect();
        $insertNewVote = $db->prepare('UPDATE upvotes_downvotes SET type = :type WHERE userID = :userId AND defID = :definitionId');
        $insertNewVote->execute(array(
            ':type' => $type,
            ':userId' => $userId,
            ':definitionId' => $definitionID,
        ));
    }


    //return new values
    $newTotalUpvotes = getTotalUpvotes($definitionID);
    $newTotalDownvotes = getTotalDownvotes($definitionID);

    // initalizing array
    $return_arr = array("upvotes"=>$newTotalUpvotes,"downvotes"=>$newTotalDownvotes);
    echo json_encode($return_arr);
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

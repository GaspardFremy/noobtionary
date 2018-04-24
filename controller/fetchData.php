<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "root"; /* Password */
$dbname = "noobtionary"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

   $type = $_POST['type'];

   // Search result
   if($type == 1){

       $searchText = $_POST['search'];

       $sql = "SELECT * FROM definitions where title like '%$searchText%' GROUP BY title
                HAVING COUNT(*)<=2 order by title asc limit 5";

       $result = mysqli_query($con,$sql);

       $search_arr = array();

       while($fetch = mysqli_fetch_assoc($result)){
           $id = $fetch['id'];
           $title = $fetch['title'];

           $rowctn = "SELECT title FROM definitions where title like '$title'";
           $result2 = mysqli_query($con,$rowctn);
           $row_cnt = mysqli_num_rows($result2);

           $search_arr[] = array("id" => $id, "title" => $title, "rowctn" => $row_cnt);
       }

       echo json_encode($search_arr);
   }

   // get User data
   if($type == 2){
       $title = $_POST['value'];

       $definitions = $db->query('SELECT definitions.*, users.name
       FROM definitions
       INNER JOIN users ON definitions.authorID = users.id
       ORDER BY creationDate DESC');

       $sql = "SELECT definitions.*, users.name
       FROM defintions
       INNER JOIN users ON definitions.authorID = users.id
       where title=".$title;

       $result = mysqli_query($con,$sql);

       $return_arr = array();
       while($fetch = mysqli_fetch_assoc($result)){
           $username = $fetch['title'];
           $email = $fetch['content'];

           $return_arr[] = array("username"=>$username, "email"=> $email);
       }

       echo json_encode($return_arr);
   }

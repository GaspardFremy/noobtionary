<?php
$host = "mysql-noobtionary.alwaysdata.net"; /* Host name */
$user = "158775"; /* User */
$password = "root"; /* Password */
$dbname = "noobtionary_test"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


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

<?php 


include 'db_connection.php';


$sql = "SELECT name FROM users;"; 
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){

    while($row = mysqli_fetch_assoc($result)){ //can call it anything but stick with row, we are getting an array back
        
        echo "<option>" . $row['name'] ."</option>";

        
    }

} else {
    echo "<option>There are no users</option>";
}


?>
<?php 

include 'scripts/db_connection.php';

$sql = "SELECT * FROM users;"; //* is ALL 
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){

    while($row = mysqli_fetch_assoc($result)){ //can call it anything but stick with row, we are getting an array back
        
        echo "

        <div class='row_item'>
        <p><strong>Name: </strong>" . $row['name'] . "</p>

        <p><strong>Age: </strong>" . $row['age'] . "</p>

        <p><strong>Occupation: </strong>" . $row['occupation'] . "</p>
        </div>

        ";
    }

} else {
    echo "<h1>No Data Found on DB</h1>";
}





?>

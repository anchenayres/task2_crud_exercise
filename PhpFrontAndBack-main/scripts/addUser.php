<?php 

include 'db_connection.php';


if(empty($_POST['name'] && $_POST['age'] && $_POST['occupation'])){ //not the NAME ATTRIBUTE
    echo "You need to enter all the data please!";
} else {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];

    $sql = "INSERT INTO users(id, name, age, occupation) VALUES (NULL,'$name','$age','$occupation');";
    $result = mysqli_query($conn, $sql);
    header("Location: http://localhost:8888/PhpFrontAndBack-main");
}






?>
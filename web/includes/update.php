<?php

require 'dbh.php';

// This gets the data from editid form from the html from on index.php
if (isset($_GET['user'])){
    $id = $_GET['user'];
    $result = $conn->query("SELECT * FROM users WHERE idUsers = $id") or die($mysqli->error());
        
        $row = mysqli_fetch_assoc($result);
        $uidUsers = $row['uidUsers'];
        $emailUsers = $row['emailUsers'];
        $addressUsers = $row['addressUsers'];
        $realNameUsers = $row['realNameUsers'];
        $PhoneUsers = $row['phoneUsers'];
    
}
?>

<?php
if($_POST){
    $conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName) or die(mysqli_error($mysqli));
 
    try{

        $uidUsers = $_POST['uidUsers'];
        $emailUsers = $_POST['emailUsers'];
        $addressUsers = $_POST['addressUsers'];
        $realNameUsers = $_POST['realNameUsers'];
        $PhoneUsers = $_POST['phoneUsers'];

        // insert query
        $sql = "UPDATE users SET uidUsers='$uidUsers' , emailUsers='$emailUsers' , addressUsers='$addressUsers' , realNameUsers='$realNameUsers' ,  PhoneUsers='$PhoneUsers' WHERE idUsers=$id;";
 
        if (mysqli_query($mysqli, $sql)) {
            header("Refresh:0");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
          }
    }
     
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
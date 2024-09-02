<?php
include_once 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
//check connection

if(!$conn){
    die("connection failed:" .mysqli_connect_error());
    echo("connection failed");
}else{
    echo "connection successfully";
}

//create table
$sql= "CREATE TABLE admintable (username VARCHA (30),password VARCHA(20),ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY (ID));";

//sql querry
mysqli_query($conn,$sql);

//insert data
if( isset($username) && isset($password)){
    $sqlquery = "INSERT INTO admintable (username,password) VALUES('$username', '$password');";
    print("succesfully");

    try{
        mysqli_query($conn, $sqlquery);
        header("Location:add-course.html");
        print("sent");
        die();
    }catch(Exception $error){
        echo 'ERROR'.$error;
    }     
   }
?>
?>
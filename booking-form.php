<?php
include_once 'connect.php';
$selected_option=['selected_option'];


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 } else {
    echo "Connection successful!<br>";
}

$sql="CREATE TABLE hostels (ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), selected_option VARCHAR(30),
user_id INT, FOREIGN KEY(user_id) REFERENCES register(user_id));";
mysqli_query($conn,$sql);


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $selected_option = $_POST['selected_option']; // Get the selected option

    // Step 3: Insert the selected option into the database
    $sql = "INSERT INTO hostels (selected_option) VALUES ('$selected_option')";

    if ($conn->query($sql) === TRUE) {
        echo "Option saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //Close the database connection
    $conn->close();
}









?>
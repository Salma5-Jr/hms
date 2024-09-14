<?php

include_once 'connect.php';

//check connection
if(!$conn){
    die("connection failed".mysqli_connect_error());
}else("connection failed");



$sql="CREATE TABLE hostels_name (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (255),
    location VARCHAR(255),
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";
mysqli_query($conn,$sql);

    // Get hostel details from form
    $name = $_POST['name'];
    $location = $_POST['location'];
    $description = $_POST['description'];

 // Insert hostel into the hostels table
 $sql="INSERT INTO hostels_name (name, location, description) VALUES ('$name', '$location', '$description')";
 // $stmt->bind_param("sss", $hostelName, $location, $hostelDescription);
 // $stmt->execute();
 if ($conn->query($sql) === TRUE) {
     echo "Option saved successfully!";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
            

   

    // Get the inserted hostel's ID
    $hostel_id = $conn->insert_id;

    // Room 1 details
    $room_name = $_POST['room_name'];
    $room_type = $_POST['room_type'];
    $room_description = $_POST['room_description'];
    $price = $_POST['price'];

    
    $sql="CREATE TABLE rooms (
        id INT AUTO_INCREMENT PRIMARY KEY,
        hostels_name_id INT,
        room_name VARCHAR(255) NOT NULL,
        room_type VARCHAR(255),
        room_description TEXT,
        price DECIMAL(10, 2),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (hostels_name_id) REFERENCES hostels_name(id) ON DELETE CASCADE
    );";
    mysqli_query($conn,$sql);

    // Insert Room 1 into rooms table
    // $stmt = $conn->prepare
    
    $sql="INSERT INTO rooms (hostels_name_id, room_name, room_type, room_description, price) VALUES ('$hostels_name_id', '$room_name', '$room_type', '$room_description', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "Option saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
     $conn->close();

?>




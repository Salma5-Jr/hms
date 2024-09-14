<?php
include_once 'connect.php';
session_start();
$selected_option=['selected_option'];


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 } else {
    echo "Connection successful!<br>";
}


$sql="CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    rooms_id INT NOT NULL,
    booking_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (room_id) REFERENCES rooms(room_id)
)";

$sql="INSERT INTO bookings (user_id, room_id)
VALUES (1, 5);  -- where user_id = 1 and room_id = 5



$sql=SELECT 
    users.fullname, 
    hostels.hostel_name, 
    rooms.room_number, 
    rooms.room_type, 
    bookings.booking_date
FROM 
    bookings
JOIN 
    users ON bookings.user_id = users.user_id
JOIN 
    rooms ON bookings.room_id = rooms.room_id
JOIN 
    hostels ON rooms.hostel_id = hostels.hostel_id;





?>

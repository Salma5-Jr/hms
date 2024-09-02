<?php
include_once 'connect.php';


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo"connection failde";
}else{
    print"connection successfully";
}

// Get course ID
$course_id = $_POST['course_id'];

// Prepare and bind
$stmt = $conn->prepare("DELETE FROM courses WHERE id = ?");
$stmt->bind_param("i", $course_id);

// Execute the statement
if ($stmt->execute()) {
    echo "Course deleted successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>

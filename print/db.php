<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual password
$dbname = "PersonalDataDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user ID (Change this based on actual login/session data)
$user_id = 1; // Example UserID

// Fetch personal and work experience data using JOIN
$sql = "SELECT * 
        FROM UnifiedPersonalDataSheet u
        LEFT JOIN WorkExperience w ON u.ID = w.UserID
        WHERE u.ID = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    die("No personal data found!");
}

$conn->close();

// Debug Output


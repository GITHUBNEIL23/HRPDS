<?php
date_default_timezone_set('Asia/Manila');
session_start(); // Start session to get logged-in user

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "elmsdb";

// Connect to MySQL database
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// ✅ Fix: Use the correct session key set during login
if (!isset($_SESSION['eid'])) {
    die("Error: User not logged in.");
}
$user_id = $_SESSION['eid'];

// Get values from input fields via GET (should ideally be POST)
$Surname = mysqli_real_escape_string($connect, $_GET['Surname']);
$Firstname = mysqli_real_escape_string($connect, $_GET['Firstname']);
$MiddleName = mysqli_real_escape_string($connect, $_GET['MiddleName']);
$info = mysqli_real_escape_string($connect, $_GET['info']);
$C4_signature = mysqli_real_escape_string($connect, $_GET['C4signature']);
$C4_Picture = mysqli_real_escape_string($connect, $_GET['C4Picture']);

$date = date('Y-m-d H:i:s');

// Start transaction
mysqli_begin_transaction($connect);

try {
    // Set previous entries of the user to inactive
    $inactive_query = "UPDATE `tblpdf` SET `is_active` = 0 WHERE `user_id` = '$user_id'";
    $inactive_result = mysqli_query($connect, $inactive_query);

    if (!$inactive_result) {
        throw new Exception("Error updating previous entries: " . mysqli_error($connect));
    }

    // Insert new entry with is_active = 1
    $query = "INSERT INTO `tblpdf` (`Surname`, `Firstname`, `MiddleName`, `info`, `user_id`, `C4_signature`, `C4Picture`, `date_column`, `is_active`) 
              VALUES ('$Surname', '$Firstname', '$MiddleName', '$info', '$user_id', '$C4_signature', '$C4_Picture', '$date', 1)";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        throw new Exception("Error inserting data: " . mysqli_error($connect));
    }

    // Commit transaction
    mysqli_commit($connect);
    header("Location: /elms/dashboard.php");
    exit;
} catch (Exception $e) {
    mysqli_rollback($connect);
    echo "Transaction failed: " . $e->getMessage();
}

mysqli_close($connect);
?>
        <script>
                let btn = document.getElementById('btn');

                let gotData1 = '<?php echo $_GET["Surname"]; ?>';
                let gotData2 = '<?php echo $_GET["Firstname"]; ?>';
                let gotData3 = '<?php echo $_GET["MiddleName"]; ?>';
                let gotData4 = '<?php echo $_GET["info"]; ?>';

                console.log(gotData1);
                console.log(gotData2);
                console.log(gotData3);
                console.log(JSON.parse(gotData4));

                btn.addEventListener('click', () => {
                    window.location = `../index.php`;
                });
        </script>
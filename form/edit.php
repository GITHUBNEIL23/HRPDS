<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "dbpdf";

// Connect to the database
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tblpdf WHERE id='$id'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $surname = $_POST['Surname'];
    $firstname = $_POST['Firstname'];
    $middlename = $_POST['MiddleName'];
    $info = $_POST['info'];

    $updateQuery = "UPDATE tblpdf SET Surname='$surname', Firstname='$firstname', MiddleName='$middlename', info='$info' WHERE id='$id'";
    
    if (mysqli_query($connect, $updateQuery)) {
        header("Location: edit.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Surname:</label>
        <input type="text" name="Surname" value="<?php echo $row['Surname']; ?>" required><br>
        <label>Firstname:</label>
        <input type="text" name="Firstname" value="<?php echo $row['Firstname']; ?>" required><br>
        <label>Middle Name:</label>
        <input type="text" name="MiddleName" value="<?php echo $row['MiddleName']; ?>" required><br>
        <label>Info:</label>
        <input type="text" name="info" value="<?php echo $row['info']; ?>" required><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>

<?php
mysqli_close($connect);
?>

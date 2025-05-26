<?php 
include 'copy.php'; // Include your db.php for database connection

// Check if `user_id` is set in the session
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Error: User not logged in.");
}

// Retrieve user_id from session
$user_id = $_SESSION['user_id'];

// Fetch the `info` column for the logged-in user
$sql = "SELECT info FROM tblpdf WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Decode the JSON `info` column
    $json_data = $row['info'];
    $data = json_decode($json_data, true); // Decode as associative array
} else {
    die("Error: No data found for the logged-in user.");
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Personal Data Sheet</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="table-responsive p-3">
    <form action="">
      <table id="pds-table">
        <!-- TABLE HEADER -->
        <tbody class="table-header">
          <tr>
            <td colspan="12" class="h5"><i><b>CS Form No. 212</b></i></td>
          </tr>
          <tr>
            <td colspan="12" class="align-top" style="max-height: 12px;"><i><b>Revised 2017</b></i></td>
          </tr>
          <tr>
            <td colspan="12" class="text-center"><h1><b>PERSONAL DATA SHEET</b></h1></td>
          </tr>
          <tr>
            <td colspan="12"><i><b>WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</b></i></td>
          </tr>
          <tr>
            <td colspan="12"><i><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM</b></i></td>
          </tr>
          <tr>
            <td colspan="9">Print legibly. Tick appropriate boxes (<input type="checkbox" checked>) and use separate sheets if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b></td>
            <td colspan="1" style="border:1px solid#000;background:#757575;width:8%;"><small>1. CS ID No.</small></td>
            <td colspan="2" class="text-right" style="border:1px solid #000;width:20%;"><small>(Do not fill up. For CSC use only)</small><br><?php echo htmlspecialchars($data['CSID']); ?></td>
          </tr>
        </tbody>

        <!-- I. PERSONAL INFORMATION -->
        <tbody class="table-body">
          <tr>
            <td colspan="12" class="text-white separator">I. PERSONAL INFORMATION</td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-bottom-0"><span class="count">2.</span> SURNAME</td>
            <td colspan="11"><?php echo htmlspecialchars($data['Surname']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-0"><span class="count"></span> FIRST NAME</td>
            <td colspan="9"><?php echo htmlspecialchars($data['Firstname']); ?></td>
            <td colspan="2" class="align-top"><small>NAME EXTENSION (JR., SR.)</small><br><?php echo htmlspecialchars($data['NameExtension']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-0"><span class="count"></span> MIDDLE NAME</td>
            <td colspan="11"><?php echo htmlspecialchars($data['MiddleName']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-bottom-0"><span class="count">3.</span> DATE OF BIRTH</td>
            <td colspan="5"><?php echo htmlspecialchars($data['DateOfBirth']); ?></td>
            <td colspan="3" class="s-label align-top border-bottom-0"><span class="count">16.</span> CITIZENSHIP</td>
            <td colspan="3"><?php echo htmlspecialchars($data['Citizenship1'] . " " . $data['Citizenship2']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">4.</span> PLACE OF BIRTH</td>
            <td colspan="5"><?php echo htmlspecialchars($data['PlaceOfBirth']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">5.</span> SEX</td>
            <td colspan="5"><?php echo htmlspecialchars($data['Sex']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">6.</span> CIVIL STATUS</td>
            <td colspan="5"><?php echo htmlspecialchars($data['CivilStatus']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">7.</span> HEIGHT (m)</td>
            <td colspan="5"><?php echo htmlspecialchars($data['Height']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">8.</span> WEIGHT (kg)</td>
            <td colspan="5"><?php echo htmlspecialchars($data['Weight']); ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">9.</span> BLOOD TYPE</td>
            <td colspan="5"><?php echo htmlspecialchars($data['BloodType']); ?></td>
          </tr>
          <!-- Add other rows here, similar to above, fetching values dynamically -->
        </tbody>
      </table>
    </form>
  </div>
</body>
</html>

<?php
// Database connection settings
$servername = "localhost";
$username = "root";          // Replace with your database username
$password = "";              // Replace with your database password
$dbname = "PersonalDataDB";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the UnifiedPersonalDataSheet table
$recordID = 1; // Replace with a dynamic ID if needed (e.g., using $_GET or $_POST)
$sql = "SELECT * FROM UnifiedPersonalDataSheet WHERE ID = $recordID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc(); // Fetch the data into an associative array
} else {
    $data = []; // Empty array if no record is found
}

$conn->close(); // Close the database connection
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
            <td colspan="9">Print legibly. Tick appropriate boxes ( <input type="checkbox" checked> ) and use separate sheet if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b></td>
            <td colspan="1" style="border:1px solid#000b;background:#757575;width:8%;"><small>1. CS ID No.</small></td>
            <td colspan="2" class="text-right" style="border:1px solid #000;width:20%;"><small>(Do not fill up. For CSC use only)</small><br><?php echo $data['CSID']; ?></td>
          </tr>
        </tbody>

        <!-- I. PERSONAL INFORMATION -->
        <tbody class="table-body">
          <tr>
            <td colspan="12" class="text-white separator">I. PERSONAL INFORMATION</td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-bottom-0"><span class="count">2.</span> SURNAME</td>
            <td colspan="11"><?php echo $data['Surname'] ; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-0"><span class="count"></span> FIRST NAME</td>
            <td colspan="9"><?php echo $data['Firstname'] ; ?></td>
            <td colspan="2" class="align-top"><small>NAME EXTENSION (JR., SR.)</small><br><?php echo $data['NameExtension'] ; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-0"><span class="count"></span> MIDDLE NAME</td>
            <td colspan="11"><?php echo $data['MiddleName']; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-bottom-0">
              <span class="count">3.</span> DATE OF BIRTH<br>
              <span class="count"></span> (mm/dd/yyyy)
            </td>
            <td colspan="5"><?php echo $data['DateOfBirth']; ?></td>
            <td colspan="3" class="s-label align-top border-bottom-0">
              <span class="count">16.</span> CITIZENSHIP
            </td>
            <td colspan="3"><?php echo $data['Citizenship']; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-0"></td>
            <td colspan="5"><?php echo $data['PlaceOfBirth']; ?></td>
            <td colspan="3" class="s-label align-top border-0 text-center small">If holder of dual citizenship,</td>
            <td colspan="3"><?php echo $data['DualCountryDetails']; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">4.</span> PLACE OF BIRTH</td>
            <td colspan="5"><?php echo $data['PlaceOfBirth']; ?></td>
            <td colspan="3" class="s-label align-top border-0 text-center small">please indicate the details.</td>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">5.</span> SEX</td>
            <td colspan="5"><?php echo $data['Sex']; ?></td>
            <td colspan="3" class="s-label align-top border-0"></td>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-bottom-0"><span class="count">6.</span> CIVIL STATUS</td>
            <td colspan="5"><?php echo $data['CivilStatus']; ?></td>
            <td colspan="2" class="s-label align-top border-bottom-0 small"><span class="count">17.</span> RESIDENTIAL ADDRESS</td>
            <td colspan="2"><?php echo $data['ResidentialAddress']; ?></td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-top-0"><span class="count"></span></td>
            <td colspan="5"></td>
            <td colspan="2" class="s-label align-top border-0"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">7.</span> HEIGHT (m)</td>
            <td colspan="5"><?php echo $data['Height']; ?></td>
            <td colspan="2" class="s-label align-top border-0"></td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">8.</span> WEIGHT (kg)</td>
            <td colspan="5"><?php echo $data['Weight']; ?></td>
            <td colspan="2" class="s-label border-0 text-center">ZIP CODE</td>
            <td colspan="4"><?php echo $data['ResidentialZipCode']; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">9.</span> BLOOD TYPE</td>
            <td colspan="5"><?php echo $data['BloodType']; ?></td>
            <td colspan="2" class="s-label border-bottom-0"><span class="count">18.</span> PERMANENT ADDRESS </td>
            <td colspan="2"><?php echo $data['PermanentAddress']; ?></td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">10.</span> GSIS ID NO.</td>
            <td colspan="5"><?php echo $data['GSIS_ID_No']; ?></td>
            <td colspan="2" class="s-label border-0"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">11.</span> PAG-IBIG NO.</td>
            <td colspan="5"><?php echo $data['PagIBIG_No']; ?></td>
            <td colspan="2" class="s-label border-0"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">12.</span> PHILHEALTH NO.</td>
            <td colspan="5"><?php echo $data['PhilHealth_No']; ?></td>
            <td colspan="2" class="s-label text-center border-0">ZIP CODE</td>
            <td colspan="4"><?php echo $data['PermanentZipCode']; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">13.</span> SSS NO.</td>
            <td colspan="5"><?php echo $data['SSS_No']; ?></td>
            <td colspan="2" class="s-label"><span class="count">19.</span> TELEPHONE NO.</td>
            <td colspan="5"><?php echo $data['TelephoneNo']; ?></td>
            <tr>
            <td colspan="1" class="s-label"><span class="count">14.</span> TIN NO.</td>
            <td colspan="5"><?php echo $data['TIN_No']; ?></td>
            <td colspan="2" class="s-label"><span class="count">20.</span> MOBILE NO.</td>
            <td colspan="4"><?php echo $data['MobileNo']; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">15.</span> AGENCY EMPLOYEE NO.</td>
            <td colspan="5"><?php echo $data['AgencyEmployeeNo']; ?></td>
            <td colspan="2" class="s-label"><span class="count">21.</span> EMAIL ADDRESS (if any)</td>
            <td colspan="4"><?php echo $data['EmailAddress']; ?></td>
          </tr>
        </tbody>
        <!-- II. FAMILY BACKGROUND -->
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator">II. FAMILY BACKGROUND</td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-bottom-0">
      <span class="count">22.</span> SPOUSE SURNAME
    </td>
    <td colspan="5"><?php echo $data['Spouse_Surname']; ?></td>
    <td colspan="3" class="s-label">
      <span class="count">23.</span> NAME of CHILDREN (Write full name and list all)
    </td>
    <td colspan="3" class="s-label text-center" style="width: 18%;">DATE OF BIRTH (mm/dd/yyyy)</td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> FIRST NAME
    <td colspan="5"><?php echo $data['Spouse_Firstname']; ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> MIDDLE NAME
    </td>
    <td colspan="5"><?php echo $data['Spouse_Middlename']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> OCCUPATION
    </td>
    <td colspan="5"><?php echo $data['Spouse_Occupation']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
</tbody>
<!-- Part 3: Spouse (Employer/Business, Address, Telephone) and Parents -->
<tbody class="table-body">
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> EMPLOYER/BUSINESS NAME
    </td>
    <td colspan="5"><?php echo $data['Spouse_Employer_BusinessName']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> BUSINESS ADDRESS
    </td>
    <td colspan="5"><?php echo $data['Spouse_BusinessAddress']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> TELEPHONE NO.
    </td>
    <td colspan="5"><?php echo $data['Spouse_TelephoneNumber']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-bottom-0">
      <span class="count">24.</span> FATHER'S SURNAME
    </td>
    <td colspan="5"><?php echo $data['Father_Surname']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> FIRST NAME
    </td>
    <td colspan="4"><?php echo $data['Father_Firstname']; ?></td>
    <td colspan="1" class="align-top s-label"><small>NAME EXTENSION (JR., SR.)</small><br><?php echo $data['Father_NameExtension']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> MIDDLE NAME
    </td>
    <td colspan="5"><?php echo $data['Father_Middlename']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-bottom-0">
      <span class="count">25.</span> MOTHER'S MAIDEN NAME
    </td>
    <td colspan="5"><?php echo $data['Mother_MaidenName']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> SURNAME
    </td>
    <td colspan="5"><?php echo $data['Mother_Surname']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> FIRST NAME
    </td>
    <td colspan="5"><?php echo $data['Mother_Firstname']; ?></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> MIDDLE NAME
    </td>
    <td colspan="5"><?php echo $data['Mother_Middlename']; ?></td>
    <td colspan="6" class="s-label text-danger text-center">
      <i><b>(Continue on separate sheet if necessary)</b></i>
    </td>
  </tr>
</tbody>
<!-- III. EDUCATIONAL BACKGROUND -->
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator">III. EDUCATIONAL BACKGROUND</td>
  </tr>
  <tr class="text-center">
    <td colspan="1" class="s-label border-bottom-0">
      <span class="count">26.</span>
      <span class="d-block text-center">LEVEL</span>
    </td>
    <td colspan="4" class="s-label border-bottom-0">
      NAME OF SCHOOL<br>(Write in full)
    </td>
    <td colspan="2" class="s-label border-bottom-0">
      BASIC EDUCATION/DEGREE/COURSE<br>(Write in full)
    </td>
    <td colspan="2" class="s-label border-bottom-0">
      PERIOD OF ATTENDANCE
    </td>
    <td colspan="1" class="s-label border-bottom-0">
      HIGHEST LEVEL/UNITS EARNED<br>(If not graduated)
    </td>
    <td colspan="1" class="s-label border-bottom-0">YEAR GRADUATED</td>
    <td colspan="1" class="s-label border-bottom-0">SCHOLARSHIP/<br>ACADEMIC<br>HONORS<br>RECEIVED</td>
  </tr>
  <tr class="text-center" style="margin-top: -20px;">
    <td colspan="1" class="s-label border-top-0"></td>
    <td colspan="4" class="s-label border-top-0"></td>
    <td colspan="2" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label">From</td>
    <td colspan="1" class="s-label">To</td>
    <td colspan="1" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label border-top-0"></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label"><span class="count"></span> ELEMENTARY</td>
    <td colspan="4"><?php echo $data['Elem_School']; ?></td>
    <td colspan="2"><?php echo $data['Elem_BasicEducationDegree']; ?></td>
    <td colspan="1"><?php echo $data['Elem_PeriodFrom']; ?></td>
    <td colspan="1"><?php echo $data['Elem_PeriodTo']; ?></td>
    <td colspan="1"><?php echo $data['Elem_HighestLevelUnits']; ?></td>
    <td colspan="1"><?php echo $data['Elem_YearGraduated']; ?></td>
    <td colspan="1"><?php echo $data['Elem_ScholarshipHonors']; ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label"><span class="count"></span> SECONDARY</td>
    <td colspan="4"><?php echo $data['Secondary_School']; ?></td>
    <td colspan="2"><?php echo $data['Secondary_BasicEducationDegree']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_PeriodFrom']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_PeriodTo']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_HighestLevelUnits']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_YearGraduated']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_ScholarshipHonors']; ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> VOCATIONAL/<br>
      <span class="count"></span> TRADE COURSE
    </td>
    <td colspan="4"><?php echo $data['Secondary_School']; ?></td>
    <td colspan="2"><?php echo $data['Secondary_BasicEducationDegree']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_PeriodFrom']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_PeriodTo']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_HighestLevelUnits']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_YearGraduated']; ?></td>
    <td colspan="1"><?php echo $data['Secondary_ScholarshipHonors']; ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label"><span class="count"></span> COLLEGE</td>
    <td colspan="4"><?php echo $data['College_School']; ?></td>
    <td colspan="2"><?php echo $data['College_BasicEducationDegree']; ?></td>
    <td colspan="1"><?php echo $data['College_PeriodFrom']; ?></td>
    <td colspan="1"><?php echo $data['College_PeriodTo']; ?></td>
    <td colspan="1"><?php echo $data['College_HighestLevelUnits']; ?></td>
    <td colspan="1"><?php echo $data['College_YearGraduated']; ?></td>
    <td colspan="1"><?php echo $data['College_ScholarshipHonors']; ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label"><span class="count"></span> GRADUATE STUDIES</td>
    <td colspan="4"><?php echo $data['NOF_Graduate']; ?></td>
    <td colspan="2"><?php echo $data['BE_D_C_Graduate']; ?></td>
    <td colspan="1"><?php echo $data['POA_From_Graduate']; ?></td>
    <td colspan="1"><?php echo $data['POA_To_Graduate']; ?></td>
    <td colspan="1"><?php echo $data['HL_UE_Graduate']; ?></td>
    <td colspan="1"><?php echo $data['Yr_G_Graduate']; ?></td>
    <td colspan="1"><?php echo $data['Scho_AHR_Graduate']; ?></td>
  </tr>
</tbody>
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>
  <tr>
    <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
    <td colspan="6"></td>
    <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
    <td colspan="3"></td>
  </tr>
</tbody>

<!-- IV. CIVIL SERVICE ELIGIBILITY -->
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator">IV. CIVIL SERVICE ELIGIBILITY</td>
  </tr>
  <tr class="text-center">
    <td colspan="5" class="s-label border-bottom-0" style="width:30%">
      <span class="count float-left">27.</span>
      CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE<br>
      BARANGAY ELIGIBILITY / DRIVER'S LICENSE
    </td>
    <td colspan="1" class="s-label border-bottom-0">RATING<br>(If Applicable)</td>
    <td colspan="2" class="s-label border-bottom-0">DATE OF EXAMINATION / CONFERMENT</td>
    <td colspan="2" class="s-label border-bottom-0">PLACE OF EXAMINATION / CONFERMENT</td>
    <td colspan="2" class="s-label border-bottom-0">LICENSE<br>(if applicable)</td>
  </tr>
  <tr class="text-center">
    <td colspan="5" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label border-top-0"></td>
    <td colspan="2" class="s-label border-top-0"></td>
    <td colspan="2" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label">NUMBER</td>
    <td colspan="1" class="s-label">Date of Validity</td>
  </tr>
  <tr class="text-center">
    <td colspan="5">
    <?php echo $data['CS_RA_CES_CSEE_DL']; ?>
    </td>
    <td colspan="1"><?php echo $data['RATING']; ?></td>
    <td colspan="2"><?php echo $data['DOT_C']; ?></td>
    <td colspan="2"><?php echo $data['POE_C']; ?></td>
    <td colspan="1"><?php echo $data['LNUMBER']; ?></td>
    <td colspan="1"><?php echo $data['LVALIDITY']; ?></td>
  </tr>
  <tr class="text-center">
    <td colspan="5"><?php echo $data['CS_RA_CES_CSEE_DL2']; ?></td>
    <td colspan="1"><?php echo $data['RATING2']; ?></td>
    <td colspan="2"><?php echo $data['DOT_C']; ?></td>
    <td colspan="2"><?php echo $data['POE_C']; ?></td>
    <td colspan="1"><?php echo $data['LNUMBER']; ?></td>
    <td colspan="1"><?php echo $data['LVALIDITY']; ?></td>
  </tr>
</tbody>
<!-- Empty rows for spacing before Work Experience -->
<tbody class="table-body">
  <tr>
    <td colspan="5"></td>
    <td colspan="1"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="1"></td>
    <td colspan="1"></td>
  </tr>
  <tr>
    <td colspan="5"></td>
    <td colspan="1"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="1"></td>
    <td colspan="1"></td>
  </tr>
</tbody>

<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>
</tbody>

<!-- V. WORK EXPERIENCE -->
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator">
      V. WORK EXPERIENCE<br>
      <small><i>(Include private employment. Start from your recent work. Description of duties should be indicated in the attached Work Experience sheet.)</i></small>
    </td>
  </tr>
  <tr class="text-center">
    <td colspan="1" class="s-label border-bottom-0" style="width: 20%;">
      <span class="count float-left">28.</span>
      INCLUSIVE DATES<br>(mm/dd/yyyy)
    </td>
    <td colspan="5" class="s-label border-bottom-0">
      POSITION TITLE<br>
      Write in full/Do not abbreviate<br>
      <?php echo $data['Work_PositionTitle']; ?>
      <center>
    <?php echo $data['Work_InclusiveDatesFrom']; ?> -
    <?php echo $data['Work_InclusiveDatesTo']; ?>
    </center>
    <?php echo $data['Work_PositionTitle']; ?>
      <center>
    <?php echo $data['Work_InclusiveDatesFrom']; ?> -
    <?php echo $data['Work_InclusiveDatesTo']; ?>
    </center>
    </td>
    <td colspan="2" class="s-label border-bottom-0">
      DEPARTMENT/AGENCY/OFFICE/COMPANY<br>(Write in full/Do not abbreviate)<br>
      <?php echo $data['Work_DepartmentAgency']; ?>
    </td>
    <td colspan="1" class="s-label border-bottom-0">MONTHLY<br>SALARY</td>
    <td colspan="1" class="s-label border-bottom-0">
      <small>SALARY/ JOB/ PAY<br>GRADE (if applicable)& STEP (Format "00-0")/ INCREMENT</small>
    </td>
    <td colspan="1" class="s-label border-bottom-0">STATUS OF<br>APPOINTMENT</td>
    <td colspan="1" class="s-label border-bottom-0">GOV'T SERVICE<br>
      <small>(Y/ N)</small>
    </td>
  </tr>
  <tr>
    <td colspan="1" class="p-0">
      <table class="w-100 border-0">
        <tbody class="border-0">
          <tr class="text-center">
            <td class="s-label border-0 border-bottom-0" style="width: 50%;">From</td>
            <td class="s-label border-top-0 border-right-0 border-bottom-0" style="width: 50%;">To</td>
          </tr>
        </tbody>
      </table>
    </td>
    <td colspan="5" class="s-label border-top-0">
    
    </td>
    <td colspan="2" class="s-label border-top-0">
    </td>
    <td colspan="1" class="s-label border-top-0">
    <center><?php echo $data['Work_MonthlySalary']; ?></center>
    </td>
    <td colspan="1" class="s-label border-top-0">
    <center><?php echo $data['Work_SalaryGrade']; ?>
    </td>
    <td colspan="1" class="s-label border-top-0">
    <center><?php echo $data['Work_AppointmentStatus']; ?>
    </td>
    <td colspan="1" class="s-label border-top-0">
    <center><?php echo $data['Work_GovernmentService']; ?>
    </td>
  </tr>
  <tr>
    <td colspan="5"></td>
    <td colspan="1"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="1"></td>
    <td colspan="1"></td>
  </tr>
</tbody>
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>
  <tr>
    <td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
    <td colspan="6"></td>
    <td colspan="2" class="text-center"><i><b>DATE</b></i></td>
    <td colspan="3"></td>
  </tr>
</tbody>

<!-- VI. VOLUNTARY WORK OR INVOLVEMENT -->
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator">
      VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S
    </td>
  </tr>
  <tr class="text-center">
    <td colspan="6" class="s-label border-bottom-0">
      <span class="count float-left">29.</span> NAME & ADDRESS OF ORGANIZATION<br>(Write in full)
    </td>
    <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
    <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
    <td colspan="3" class="s-label border-bottom-0">POSITION / NATURE OF WORK</td>
  </tr>
  <tr class="text-center">
    <td colspan="6" class="s-label border-top-0"><?php echo $data['VolWork_OrganizationName']; ?></td>
    <td colspan="1" class="s-label">From<br><?php echo $data['VolWork_InclusiveDatesFrom']; ?></td>
    <td colspan="1" class="s-label">To<br><?php echo $data['VolWork_InclusiveDatesTo']; ?></td>
    <td colspan="1" class="s-label border-top-0"><?php echo $data['VolWork_Hours']; ?></td>
    <td colspan="3" class="s-label border-top-0"><?php echo $data['VolWork_Position']; ?></td>
  </tr>
</tbody>

<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>
</tbody>

<!-- VI. (Alternate Voluntary Work as Learning & Development) -->
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator">
      VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S<br>
      <small><i>(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</i></small>
    </td>
  </tr>
  <tr class="text-center">
    <td colspan="6" class="s-label border-bottom-0">
      <span class="count float-left">30.</span> TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS<br>(Write in full)
    </td>
    <td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
    <td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
    <td colspan="1" class="s-label border-bottom-0">Type of LD ( Managerial/ Supervisory/Technical/etc)</td>
    <td colspan="2" class="s-label border-bottom-0">CONDUCTED/ SPONSORED BY<br>(Write in full)
    </td>
  </tr>
  <tr class="text-center">
    <td colspan="6" class="s-label border-top-0"><?php echo $learninganddevelopment['TrainingTitle']; ?></td>
    <td colspan="1" class="s-label">From</td>
    <td colspan="1" class="s-label">To</td>
    <td colspan="1" class="s-label border-top-0"><?php foreach ($data['LAD'] as $lad) { 
          echo '<div>' . $lad['Hours'] . '</div>';
      } ?></td>
    <td colspan="1" class="s-label border-top-0"><?php foreach ($data['LAD'] as $lad) { 
          echo '<div>' . $lad['Type'] . '</div>';
      } ?></td>
    <td colspan="2" class="s-label border-top-0"><?php foreach ($data['LAD'] as $lad) { 
          echo '<div>' . $lad['ConductedBy'] . '</div>';
      } ?></td>
  </tr>
</tbody>

<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>
</tbody>
<!-- VIII. OTHER INFORMATION -->
<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator">VIII. OTHER INFORMATION</td>
  </tr>
  <tr class="text-center">
    <td colspan="4" class="s-label">
      <span class="count float-left">31.</span> SPECIAL SKILLS and HOBBIES
    </td>
    <td colspan="4" class="s-label">
      <span class="count float-left">32.</span> NON-ACADEMIC DISTINCTIONS / RECOGNITION<br>(Write in full)
    </td>
    <td colspan="4" class="s-label">
      <span class="count float-left">33.</span> MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write in full)
    </td>
  </tr>
  <tr>
    <td colspan="4"><?php echo $data['Skills Hobbies']; ?></td>
    <td colspan="4"><?php echo $data['NonAcadDistinctions']; ?></td>
    <td colspan="4"><?php echo $data['Membership']; ?></td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="4"></td>
    <td colspan="4"></td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="4"></td>
    <td colspan="4"></td>
  </tr>
</tbody>

<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>
  <tr>
    <td colspan="4" class="text-center"><i><b>SIGNATURE</b></i></td>
    <td colspan="3"></td>
    <td colspan="1" class="text-center"><i><b>DATE</b></i></td>
    <td colspan="4"></td>
  </tr>
</tbody>

<!-- End of Page 3 -->

<!-- Q1: RELATIVE QUESTIONS -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="12" class="separator"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">34.</span> Are you related by consanguinity or affinity to the appointing or recommending authority, or to the<br>
      <span class="count"></span>chief of bureau or office or to the person who has immediate supervision over you in the Office,<br>
      <span class="count"></span>Bureau or Department where you will be appointed,
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>a. within the third degree?<br>
    </td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['Relative_ThirdDegree']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>b. within the fourth degree (for Local Government Unit - Career Employees)?
    </td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['Relative_FourthDegree']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, give details:</td>
    <td colspan="3"><?php echo $data['Relative_Details']; ?></td>
  </tr>
</tbody>
<!-- Q2: ADMINISTRATIVE OFFENSE -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">35.</span> a. Have you ever been found guilty of any administrative offense?
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="5">If YES, give details:</td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"><?php echo $data['AO']; ?></td>
    <td colspan="5"><?php echo $data['AODetails']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span> b. within the fourth degree (for Local Government Unit - Career Employees)?
    </td>
    <td colspan="2" style="border-top-width: 1px !important;"></td>
    <td colspan="3" style="border-top-width: 1px !important;"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="5">If YES, give details:</td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="5"><?php echo $data['AO_FourthDegree']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">Date Filed:</td>
    <td colspan="3"><?php echo $data['CCDate']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">Status of Case/s:</td>
    <td colspan="3"><?php echo $data['CCSOC']; ?></td>
  </tr>
</tbody>

<!-- Q3: CONVICTION -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">36.</span> Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"><?php echo $data['CoV']; ?></td>
    <td colspan="5">If YES, give details:</td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="5"><?php echo $data['CoVDetails']; ?></td>
  </tr>
</tbody>

<!-- Q4: SEPARATION FROM SERVICE -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">37.</span> Have you ever been separated from the service in any of the following modes: resignation,<br>
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span> retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased
    </td>
    <td colspan="5">If YES, give details:</td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span> out (abolition) in the public or private sector?
    </td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['SFTS']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['SFTSDetails']; ?></td>
  </tr>
</tbody>

<!-- Q5: ELECTION AND RESIGNATION -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">38.</span> a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, give details:</td>
    <td colspan="3"><?php echo $data['CNOLE']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span> b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?
    </td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['RGS']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, give details:</td>
    <td colspan="3"><?php echo $data['RGSDetails']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
</tbody>
<!-- Q6: IMMIGRATION/PERMANENT RESIDENCY -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">39.</span> Have you acquired the status of an immigrant or permanent resident of another country?
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"><?php echo $data['SIoPS']; ?></td>
    <td colspan="2">If YES, give details (country):</td>
    <td colspan="3"><?php echo $data['SIoPSDetails']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
</tbody>

<!-- Q7: INDIGENOUS, DISABILITY, SOLO PARENT -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">40.</span> Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>a. Are you a member of any indigenous group?<br>
    </td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['IG']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, please specify:</td>
    <td colspan="3"><?php echo $data['IGDetails']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>b. Are you a person with disability?
    </td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['PwD']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, please specify:</td>
    <td colspan="3"><?php echo $data['PwDDetails']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>c. Are you a solo parent?
    </td>
    <td colspan="2"></td>
    <td colspan="3"><?php echo $data['SP']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, please specify:</td>
    <td colspan="3"><?php echo $data['SPDetails']; ?></td>
  </tr>
</tbody>

<!-- End of Page 4 -->

<!-- REFERENCES and GOVERNMENT ISSUED ID Section (Page 5) -->
<tbody class="table-body">
  <tr>
    <td colspan="8" class="s-label">
      <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related by consanguinity or affinity to applicant/appointee)</span>
    </td>
    <td colspan="4" rowspan="5" class="p-5">
      <table class="w-75 mx-auto border-0">
        <tbody class="border-0">
          <tr>
            <td class="text-center p-3">
              ID picture taken within the last 6 months 3.5 cm. X 4.5 cm (passport size)<br>
              With full and handwritten name tag and signature over printed name.<br>
              Computer generated or photocopied picture is not acceptable.
            </td>
          </tr>
          <tr>
            <td class="border-0 text-muted lead text-center">PHOTO</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
  <tr class="text-center">
    <td colspan="4" class="s-label">NAME</td>
    <td colspan="2" class="s-label">ADDRESS</td>
    <td colspan="2" class="s-label">TEL. NO.</td>
  </tr>
  <tr>
    <td colspan="4"><?php echo $data['References']; ?></td>
    <td colspan="2"><?php echo $data['References_Address']; ?></td>
    <td colspan="2"><?php echo $data['References_TelNo']; ?></td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="8">
      <span class="count">42.</span> I declare under oath that I have personally accomplished this Personal Data Sheet which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. I authorize the agency head / authorized representative to verify/validate the contents stated herein. I agree that any misrepresentation made in this document and its attachments shall cause the filing of administrative/criminal case/s against me.
    </td>
  </tr>
  <tr>
    <td colspan="12" class="border-0 p-0">
      <table class="border-0 w-100">
        <tbody class="border-0">
          <tr>
            <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
              <table class="border-0 w-100">
                <tbody>
                  <tr>
                    <td class="s-label py-2">
                      Government Issued ID (i.e. Passport, GSIS, SSS, PRC, Driver's License, etc.)<br>
                      PLEASE INDICATE ID Number and Date of Issuance
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%;"><?php echo $data['GIID']; ?></td>
                  </tr>
                  <tr>
                    <td style="width: 30%;"><?php echo $data['ID_L_PNO']; ?></td>
                  </tr>
                  <tr>
                    <td style="width: 30%;"><?php echo $data['D_Pol']; ?></td>
                  </tr>
                </tbody>
              </table>
              <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
  <table class="border-0 w-100">
    <tbody class="border-0 text-center">
      <tr>
        <td class="py-4"></td>
      </tr>
      <tr>
        <td class="s-label"><small>Signature (Sign inside the box)</small></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td class="s-label"><small>Date Accomplished</small></td>
      </tr>
    </tbody>
  </table>
</td>
<td colspan="4" class="border-0 p-3">
  <table class="border-0 w-100">
    <tbody class="border-0">
      <tr>
        <td class="py-5"></td>
      </tr>
      <tr>
        <td class="s-label text-center">Right Thumbmark</td>
      </tr>
    </tbody>
  </table>
</td>
</tr>
</tbody>

<tbody class="table-body">
  <tr>
    <td colspan="12" class="text-center py-2">
      SUBSCRIBED AND SWORN to before me this <input type="text" class="border-top-0 border-left-0 border-right-0" style="width: 25%;"> , affiant exhibiting his/her validly issued government ID as indicated above.
    </td>
  </tr>
  <tr>
    <td colspan="12" class="py-5">
      <table class="w-25 mx-auto">
        <tbody>
          <tr>
            <td class="py-5"></td>
          </tr>
          <tr>
            <td class="s-label text-center">Person Administering Oath</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
</tbody>
<!-- End of References Section -->
</table>
</form>
</div>
<?php
echo "<pre>";
print_r($data);
echo "</pre>";
?>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
session_start(); // Start session to get logged-in user

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "personaldatadb";

// Connect to MySQL database using mysqli
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    die("Error: User not logged in.");
}

$user_id = $_SESSION['user_id']; // Get user ID from session

// Get values from input fields (ensure your HTML form includes all these fields)
$CSID = mysqli_real_escape_string($connect, $_POST['CSID']);
$Surname = mysqli_real_escape_string($connect, $_POST['Surname']);
$Firstname = mysqli_real_escape_string($connect, $_POST['Firstname']);
$NameExtension = mysqli_real_escape_string($connect, $_POST['NameExtension']);
$MiddleName = mysqli_real_escape_string($connect, $_POST['MiddleName']);
$DateOfBirth = mysqli_real_escape_string($connect, $_POST['DateOfBirth']);
$PlaceOfBirth = mysqli_real_escape_string($connect, $_POST['PlaceOfBirth']);
$Sex = mysqli_real_escape_string($connect, $_POST['Sex']);
$CivilStatus = mysqli_real_escape_string($connect, $_POST['CivilStatus']);
$Height = mysqli_real_escape_string($connect, $_POST['Height']);
$Weight = mysqli_real_escape_string($connect, $_POST['Weight']);
$BloodType = mysqli_real_escape_string($connect, $_POST['BloodType']);
$GSIS_ID_No = mysqli_real_escape_string($connect, $_POST['GSIS_ID_No']);
$PagIBIG_No = mysqli_real_escape_string($connect, $_POST['PagIBIG_No']);
$PhilHealth_No = mysqli_real_escape_string($connect, $_POST['PhilHealth_No']);
$SSS_No = mysqli_real_escape_string($connect, $_POST['SSS_No']);
$TIN_No = mysqli_real_escape_string($connect, $_POST['TIN_No']);
$AgencyEmployeeNo = mysqli_real_escape_string($connect, $_POST['AgencyEmployeeNo']);
$ResidentialAddress = mysqli_real_escape_string($connect, $_POST['ResidentialAddress']);
$ResidentialZipCode = mysqli_real_escape_string($connect, $_POST['ResidentialZipCode']);
$PermanentAddress = mysqli_real_escape_string($connect, $_POST['PermanentAddress']);
$PermanentZipCode = mysqli_real_escape_string($connect, $_POST['PermanentZipCode']);
$TelephoneNo = mysqli_real_escape_string($connect, $_POST['TelephoneNo']);
$MobileNo = mysqli_real_escape_string($connect, $_POST['MobileNo']);
$EmailAddress = mysqli_real_escape_string($connect, $_POST['EmailAddress']);
$Citizenship = mysqli_real_escape_string($connect, $_POST['Citizenship']);

$DualCountryDetails = mysqli_real_escape_string($connect, $_POST['DualCountryDetails']);
$Spouse_Surname = mysqli_real_escape_string($connect, $_POST['Spouse_Surname']);
$Spouse_Firstname = mysqli_real_escape_string($connect, $_POST['Spouse_Firstname']);
$Spouse_NameExtension = mysqli_real_escape_string($connect, $_POST['Spouse_NameExtension']);
$Spouse_Middlename = mysqli_real_escape_string($connect, $_POST['Spouse_Middlename']);
$Spouse_Occupation = mysqli_real_escape_string($connect, $_POST['Spouse_Occupation']);
$Spouse_Employer_BusinessName = mysqli_real_escape_string($connect, $_POST['Spouse_Employer_BusinessName']);
$Spouse_BusinessAddress = mysqli_real_escape_string($connect, $_POST['Spouse_BusinessAddress']);
$Spouse_TelephoneNumber = mysqli_real_escape_string($connect, $_POST['Spouse_TelephoneNumber']);
$Father_Surname = mysqli_real_escape_string($connect, $_POST['Father_Surname']);
$Father_Firstname = mysqli_real_escape_string($connect, $_POST['Father_Firstname']);
$Father_NameExtension = mysqli_real_escape_string($connect, $_POST['Father_NameExtension']);
$Father_Middlename = mysqli_real_escape_string($connect, $_POST['Father_Middlename']);
$Mother_MaidenName = mysqli_real_escape_string($connect, $_POST['Mother_MaidenName']);
$Mother_Surname = mysqli_real_escape_string($connect, $_POST['Mother_Surname']);
$Mother_Firstname = mysqli_real_escape_string($connect, $_POST['Mother_Firstname']);
$Mother_Middlename = mysqli_real_escape_string($connect, $_POST['Mother_Middlename']);

// Education, Work, and other details
$Elem_School = mysqli_real_escape_string($connect, $_POST['Elem_School']);
$Elem_BasicEducationDegree = mysqli_real_escape_string($connect, $_POST['Elem_BasicEducationDegree']);
$Elem_PeriodFrom = mysqli_real_escape_string($connect, $_POST['Elem_PeriodFrom']);
$Elem_PeriodTo = mysqli_real_escape_string($connect, $_POST['Elem_PeriodTo']);
$Elem_HighestLevelUnits = mysqli_real_escape_string($connect, $_POST['Elem_HighestLevelUnits']);
$Elem_YearGraduated = mysqli_real_escape_string($connect, $_POST['Elem_YearGraduated']);
$Elem_ScholarshipHonors = mysqli_real_escape_string($connect, $_POST['Elem_ScholarshipHonors']);
$Secondary_School = mysqli_real_escape_string($connect, $_POST['Secondary_School']);
$Secondary_BasicEducationDegree = mysqli_real_escape_string($connect, $_POST['Secondary_BasicEducationDegree']);
$Secondary_PeriodFrom = mysqli_real_escape_string($connect, $_POST['Secondary_PeriodFrom']);
$Secondary_PeriodTo = mysqli_real_escape_string($connect, $_POST['Secondary_PeriodTo']);
$Secondary_HighestLevelUnits = mysqli_real_escape_string($connect, $_POST['Secondary_HighestLevelUnits']);
$Secondary_YearGraduated = mysqli_real_escape_string($connect, $_POST['Secondary_YearGraduated']);
$Secondary_ScholarshipHonors = mysqli_real_escape_string($connect, $_POST['Secondary_ScholarshipHonors']);
$College_School = mysqli_real_escape_string($connect, $_POST['College_School']);
$College_BasicEducationDegree = mysqli_real_escape_string($connect, $_POST['College_BasicEducationDegree']);
$College_PeriodFrom = mysqli_real_escape_string($connect, $_POST['College_PeriodFrom']);
$College_PeriodTo = mysqli_real_escape_string($connect, $_POST['College_PeriodTo']);
$College_HighestLevelUnits = mysqli_real_escape_string($connect, $_POST['College_HighestLevelUnits']);
$College_YearGraduated = mysqli_real_escape_string($connect, $_POST['College_YearGraduated']);
$College_ScholarshipHonors = mysqli_real_escape_string($connect, $_POST['College_ScholarshipHonors']);
$Work_InclusiveDatesFrom = mysqli_real_escape_string($connect, $_POST['Work_InclusiveDatesFrom']);
$Work_InclusiveDatesTo = mysqli_real_escape_string($connect, $_POST['Work_InclusiveDatesTo']);
$Work_PositionTitle = mysqli_real_escape_string($connect, $_POST['Work_PositionTitle']);
$Work_DepartmentAgency = mysqli_real_escape_string($connect, $_POST['Work_DepartmentAgency']);
$Work_MonthlySalary = mysqli_real_escape_string($connect, $_POST['Work_MonthlySalary']);
$Work_SalaryGrade = mysqli_real_escape_string($connect, $_POST['Work_SalaryGrade']);
$Work_AppointmentStatus = mysqli_real_escape_string($connect, $_POST['Work_AppointmentStatus']);
$Work_GovernmentService = mysqli_real_escape_string($connect, $_POST['Work_GovernmentService']);
$Reference_Name = mysqli_real_escape_string($connect, $_POST['Reference_Name']);
$Reference_Address = mysqli_real_escape_string($connect, $_POST['Reference_Address']);
$Reference_TelephoneNumber = mysqli_real_escape_string($connect, $_POST['Reference_TelephoneNumber']);

// Add all fields to the query
$query = "INSERT INTO `unifiedpersonaldatasheet` (
    `CSID`, `Surname`, `Firstname`, `NameExtension`, `MiddleName`, `DateOfBirth`, `PlaceOfBirth`, `Sex`, `CivilStatus`,
    `Height`, `Weight`, `BloodType`, `GSIS_ID_No`, `PagIBIG_No`, `PhilHealth_No`, `SSS_No`, `TIN_No`,
    `AgencyEmployeeNo`, `ResidentialAddress`, `ResidentialZipCode`, `PermanentAddress`, `PermanentZipCode`,
    `TelephoneNo`, `MobileNo`, `EmailAddress`, `Citizenship`, `DualCountryDetails`, `Spouse_Surname`, `Spouse_Firstname`,
    `Spouse_NameExtension`, `Spouse_Middlename`, `Spouse_Occupation`, `Spouse_Employer_BusinessName`, `Spouse_BusinessAddress`,
    `Spouse_TelephoneNumber`, `Father_Surname`, `Father_Firstname`, `Father_NameExtension`, `Father_Middlename`,
    `Mother_MaidenName`, `Mother_Surname`, `Mother_Firstname`, `Mother_Middlename`, `Elem_School`, `Elem_BasicEducationDegree`,
    `Elem_PeriodFrom`, `Elem_PeriodTo`, `Elem_HighestLevelUnits`, `Elem_YearGraduated`, `Elem_ScholarshipHonors`,
    `Secondary_School`, `Secondary_BasicEducationDegree`, `Secondary_PeriodFrom`, `Secondary_PeriodTo`, `Secondary_HighestLevelUnits`,
    `Secondary_YearGraduated`, `Secondary_ScholarshipHonors`, `College_School`, `College_BasicEducationDegree`,
    `College_PeriodFrom`, `College_PeriodTo`, `College_HighestLevelUnits`, `College_YearGraduated`, `College_ScholarshipHonors`,
    `Work_InclusiveDatesFrom`, `Work_InclusiveDatesTo`, `Work_PositionTitle`, `Work_DepartmentAgency`, `Work_MonthlySalary`,
    `Work_SalaryGrade`, `Work_AppointmentStatus`, `Work_GovernmentService`, `Reference_Name`, `Reference_Address`,
    `Reference_TelephoneNumber`
) VALUES (
    '$CSID', '$Surname', '$Firstname', '$NameExtension', '$MiddleName', '$DateOfBirth', '$PlaceOfBirth', '$Sex', '$CivilStatus',
    '$Height', '$Weight', '$BloodType', '$GSIS_ID_No', '$PagIBIG_No', '$PhilHealth_No', '$SSS_No', '$TIN_No',
    '$AgencyEmployeeNo', '$ResidentialAddress', '$ResidentialZipCode', '$PermanentAddress', '$PermanentZipCode',
    '$TelephoneNo', '$MobileNo', '$EmailAddress', '$Citizenship', '$DualCountryDetails', '$Spouse_Surname', '$Spouse_Firstname',
    '$Spouse_NameExtension', '$Spouse_Middlename', '$Spouse_Occupation', '$Spouse_Employer_BusinessName', '$Spouse_BusinessAddress',
    '$Spouse_TelephoneNumber', '$Father_Surname', '$Father_Firstname', '$Father_NameExtension', '$Father_Middlename',
    '$Mother_MaidenName', '$Mother_Surname', '$Mother_Firstname', '$Mother_Middlename', '$Elem_School', '$Elem_BasicEducationDegree',
    '$Elem_PeriodFrom', '$Elem_PeriodTo', '$Elem_HighestLevelUnits', '$Elem_YearGraduated', '$Elem_ScholarshipHonors',
    '$Secondary_School', '$Secondary_BasicEducationDegree', '$Secondary_PeriodFrom', '$Secondary_PeriodTo', '$Secondary_HighestLevelUnits',
    '$Secondary_YearGraduated', '$Secondary_ScholarshipHonors', '$College_School', '$College_BasicEducationDegree',
    '$College_PeriodFrom', '$College_PeriodTo', '$College_HighestLevelUnits', '$College_YearGraduated', '$College_ScholarshipHonors',
    '$Work_InclusiveDatesFrom', '$Work_InclusiveDatesTo', '$Work_PositionTitle', '$Work_DepartmentAgency', '$Work_MonthlySalary',
    '$Work_SalaryGrade', '$Work_AppointmentStatus', '$Work_GovernmentService', '$Reference_Name', '$Reference_Address',
    '$Reference_TelephoneNumber'
)";

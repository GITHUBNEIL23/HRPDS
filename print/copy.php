<?php
session_start(); // Start session at the beginning

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elmsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Fix: Use the correct session key set during login
if (!isset($_SESSION['eid'])) {
    die("Error: User not logged in.");
}
$user_id = $_SESSION['eid'];

// Query to fetch the info column for the logged-in user
$sql = "SELECT info FROM tblpdf WHERE user_id = $user_id";
$result = $conn->query($sql);

if (!$result) {
    die("Error in SQL query: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();
    
    // Decode the JSON in the info column
    $json_data = $row['info'];
    $data = json_decode($json_data, true); // Decode as associative array

    // Extract each field individually
    $CSID = isset($data['CSID']) ? $data['CSID'] : 'N/A';
    $Surname = isset($data['Surname']) ? $data['Surname'] : 'N/A';
    $Firstname = isset($data['Firstname']) ? $data['Firstname'] : 'N/A';
    $NameExtension = isset($data['NameExtension']) ? $data['NameExtension'] : 'N/A';
    $MiddleName = isset($data['MiddleName']) ? $data['MiddleName'] : 'N/A';
    $DateOfBirth = isset($data['DateOfBirth']) ? $data['DateOfBirth'] : 'N/A';
    $PlaceOfBirth = isset($data['PlaceOfBirth']) ? $data['PlaceOfBirth'] : 'N/A';
    $Sex = isset($data['Sex']) ? $data['Sex'] : 'N/A';
    $CivilStatus = isset($data['CivilStatus']) ? $data['CivilStatus'] : 'N/A';
    $Height = isset($data['Height']) ? $data['Height'] : 'N/A';
    $Weight = isset($data['Weight']) ? $data['Weight'] : 'N/A';
    $BloodType = isset($data['BloodType']) ? $data['BloodType'] : 'N/A';
    $GSIS = isset($data['GSIS']) ? $data['GSIS'] : 'N/A';
    $PagIBIG = isset($data['PagIBIG']) ? $data['PagIBIG'] : 'N/A';
    $PHILHEALTH = isset($data['PHILHEALTH']) ? $data['PHILHEALTH'] : 'N/A';
    $SSS = isset($data['SSS']) ? $data['SSS'] : 'N/A';
    $TIN = isset($data['TIN']) ? $data['TIN'] : 'N/A';
    $AgencyNo = isset($data['AgencyNo']) ? $data['AgencyNo'] : 'N/A';
    $Citizenship1 = isset($data['Citizenship1']) ? $data['Citizenship1'] : 'N/A';
    $Citizenship2 = isset($data['Citizenship2']) ? $data['Citizenship2'] : 'N/A';
    $DualCountry = isset($data['DualCountry']) ? $data['DualCountry'] : 'N/A';
    $ResHouse_Block_LotNo = isset($data['ResHouse_Block_LotNo']) ? $data['ResHouse_Block_LotNo'] : 'N/A';
    $ResStreet = isset($data['ResStreet']) ? $data['ResStreet'] : 'N/A';
    $ResSubdivision_Village = isset($data['ResSubdivision_Village']) ? $data['ResSubdivision_Village'] : 'N/A';
    $ResBarangay = isset($data['ResBarangay']) ? $data['ResBarangay'] : 'N/A';
    $ResCity_Municipality = isset($data['ResCity_Municipality']) ? $data['ResCity_Municipality'] : 'N/A';
    $ResProvince = isset($data['ResProvince']) ? $data['ResProvince'] : 'N/A';
    $ResZipCode = isset($data['ResZipCode']) ? $data['ResZipCode'] : 'N/A';
    $PerHouse_Block_LotNo = isset($data['PerHouse_Block_LotNo']) ? $data['PerHouse_Block_LotNo'] : 'N/A';
    $PerStreet = isset($data['PerStreet']) ? $data['PerStreet'] : 'N/A';
    $PerSubdivision_Village = isset($data['PerSubdivision_Village']) ? $data['PerSubdivision_Village'] : 'N/A';
    $PerBarangay = isset($data['PerBarangay']) ? $data['PerBarangay'] : 'N/A';
    $PerCity_Municipality = isset($data['PerCity_Municipality']) ? $data['PerCity_Municipality'] : 'N/A';
    $PerProvince = isset($data['PerProvince']) ? $data['PerProvince'] : 'N/A';
    $PerZipCode = isset($data['PerZipCode']) ? $data['PerZipCode'] : 'N/A';
    $TelephoneNumber = isset($data['TelephoneNumber']) ? $data['TelephoneNumber'] : 'N/A';
    $MobileNumber = isset($data['MobileNumber']) ? $data['MobileNumber'] : 'N/A';
    $EmailAdd = isset($data['EmailAdd']) ? $data['EmailAdd'] : 'N/A';
    $Spouse_Surname = isset($data['Spouse_Surname']) ? $data['Spouse_Surname'] : 'N/A';
    $Spouse_Firstname = isset($data['Spouse_Firstname']) ? $data['Spouse_Firstname'] : 'N/A';
    $Spouse_NameExtension = isset($data['Spouse_NameExtension']) ? $data['Spouse_NameExtension'] : 'N/A';
    $Spouse_Middlename = isset($data['Spouse_Middlename']) ? $data['Spouse_Middlename'] : 'N/A';
    $Spouse_Occupation = isset($data['Spouse_Occupation']) ? $data['Spouse_Occupation'] : 'N/A';
    $Spouse_Employer_Businessname = isset($data['Spouse_Employer_Businessname']) ? $data['Spouse_Employer_Businessname'] : 'N/A';
    $Spouse_BusinessAddress = isset($data['Spouse_BusinessAddress']) ? $data['Spouse_BusinessAddress'] : 'N/A';
    $Spouse_TelephoneNumber = isset($data['Spouse_TelephoneNumber']) ? $data['Spouse_TelephoneNumber'] : 'N/A';
    $Spouse_Children = isset($data['Spouse_Children']) ? $data['Spouse_Children'] : 'N/A';
    $NOF_Elementary = isset($data['NOF_Elementary']) ? $data['NOF_Elementary'] : 'N/A';
    $NOF_Secondary = isset($data['NOF_Secondary']) ? $data['NOF_Secondary'] : 'N/A';
    $NOF_Vocational = isset($data['NOF_Vocational']) ? $data['NOF_Vocational'] : 'N/A';
    $NOF_College = isset($data['NOF_College']) ? $data['NOF_College'] : 'N/A';
    $NOF_Graduate = isset($data['NOF_Graduate']) ? $data['NOF_Graduate'] : 'N/A';
    $BE_D_C_Elementary = isset($data['BE_D_C_Elementary']) ? $data['BE_D_C_Elementary'] : 'N/A';
    $BE_D_C_Secondary = isset($data['BE_D_C_Secondary']) ? $data['BE_D_C_Secondary'] : 'N/A';
    $BE_D_C_Vocational = isset($data['BE_D_C_Vocational']) ? $data['BE_D_C_Vocational'] : 'N/A';
    $BE_D_C_College = isset($data['BE_D_C_College']) ? $data['BE_D_C_College'] : 'N/A';
    $BE_D_C_Graduate = isset($data['BE_D_C_Graduate']) ? $data['BE_D_C_Graduate'] : 'N/A';
    $POA_From_Elementary = isset($data['POA_From_Elementary']) ? $data['POA_From_Elementary'] : 'N/A';
    $POA_To_Elementary = isset($data['POA_From_Elementary']) ? $data['POA_From_Elementary'] : 'N/A';
    $POA_From_Secondary = isset($data['POA_From_Secondary']) ? $data['POA_From_Secondary'] : 'N/A';
    $POA_To_Secondary = isset($data['POA_To_Secondary']) ? $data['POA_To_Secondary'] : 'N/A';
    $POA_From_Vocational = isset($data['POA_From_Vocational']) ? $data['POA_From_Vocational'] : 'N/A';
    $POA_To_Vocational = isset($data['POA_To_Vocational']) ? $data['POA_To_Vocational'] : 'N/A';
    $POA_From_College = isset($data['POA_From_College']) ? $data['POA_From_College'] : 'N/A';
    $POA_To_College = isset($data['POA_To_College']) ? $data['POA_To_College'] : 'N/A';
    $POA_From_Graduate = isset($data['POA_From_Graduate']) ? $data['POA_From_Graduate'] : 'N/A';
    $POA_To_Graduate = isset($data['POA_To_Graduate']) ? $data['POA_To_Graduate'] : 'N/A';
    $HL_UE_Elementary = isset($data['HL_UE_Elementary']) ? $data['HL_UE_Elementary'] : 'N/A';
    $HL_UE_Secondary = isset($data['HL_UE_Secondary']) ? $data['HL_UE_Secondary'] : 'N/A';
    $HL_UE_Vocational = isset($data['HL_UE_Vocational']) ? $data['HL_UE_Vocational'] : 'N/A';
    $HL_UE_College = isset($data['HL_UE_College']) ? $data['HL_UE_College'] : 'N/A';
    $HL_UE_Graduate = isset($data['HL_UE_Graduate']) ? $data['HL_UE_Graduate'] : 'N/A';
    $YR_G_Elementary = isset($data['YR_G_Elementary']) ? $data['YR_G_Elementary'] : 'N/A';
    $YR_G_Secondary = isset($data['YR_G_Secondary']) ? $data['YR_G_Secondary'] : 'N/A';
    $YR_G_Vocational = isset($data['YR_G_Vocational']) ? $data['YR_G_Vocational'] : 'N/A';
    $YR_G_College = isset($data['YR_G_College']) ? $data['YR_G_College'] : 'N/A';
    $YR_G_Graduate = isset($data['YR_G_Graduate']) ? $data['YR_G_Graduate'] : 'N/A';
    $Scho_AHR_Elementary = isset($data['Scho_AHR_Elementary']) ? $data['Scho_AHR_Elementary'] : 'N/A';
    $Scho_AHR_Secondary = isset($data['Scho_AHR_Secondary']) ? $data['Scho_AHR_Secondary'] : 'N/A';
    $Scho_AHR_Vocational = isset($data['Scho_AHR_Vocational']) ? $data['Scho_AHR_Vocational'] : 'N/A';
    $Scho_AHR_College = isset($data['Scho_AHR_College']) ? $data['Scho_AHR_College'] : 'N/A';
    $Scho_AHR_Graduate = isset($data['Scho_AHR_Graduate']) ? $data['Scho_AHR_Graduate'] : 'N/A';
    $CS_RA_CES_CSEE_DL = isset($data['CS_RA_CES_CSEE_DL']) ? $data['CS_RA_CES_CSEE_DL'] : 'N/A';
    $CivilService = isset($data['CivilService']) ? $data['CivilService'] : 'N/A';
    $WorkExperience = isset($data['WorkExperience']) ? $data['WorkExperience'] : 'N/A';
    $VoluntaryWork = isset($data['VoluntaryWork']) ? $data['VoluntaryWork'] : 'N/A';
    $LAD = isset($data['LAD']) ? $data['LAD'] : 'N/A';
    $TD = isset($data['TD']) ? $data['TD'] : 'N/A';
    $FD = isset($data['FD']) ? $data['FD'] : 'N/A';
    $FDDetails = isset($data['FDDetails']) ? $data['FDDetails'] : 'N/A';
    $AO = isset($data['AO']) ? $data['AO'] : 'N/A';
    $AODetails = isset($data['AODetails']) ? $data['AODetails'] : 'N/A';
    $CC = isset($data['CC']) ? $data['CC'] : 'N/A';
    $CCDate = isset($data['CCDate']) ? $data['CCDate'] : 'N/A';
    $CCSOC = isset($data['CCSOC']) ? $data['CCSOC'] : 'N/A';
    $CoV = isset($data['CoV']) ? $data['CoV'] : 'N/A';
    $CoVDetails = isset($data['CoVDetails']) ? $data['CoVDetails'] : 'N/A';
    $SFTS = isset($data['SFTS']) ? $data['SFTS'] : 'N/A';
    $SFTSDetails = isset($data['SFTSDetails']) ? $data['SFTSDetails'] : 'N/A';
    $CNOLE = isset($data['CNOLE']) ? $data['CNOLE'] : 'N/A';
    $CNOLEDetails = isset($data['CNOLEDetails']) ? $data['CNOLEDetails'] : 'N/A';
    $RGS = isset($data['RGS']) ? $data['RGS'] : 'N/A';
    $RGSDetails = isset($data['RGSDetails']) ? $data['RGSDetails'] : 'N/A';
    $SIoPS = isset($data['SIoPS']) ? $data['SIoPS'] : 'N/A';
    $SIoPSDetails = isset($data['SIoPSDetails']) ? $data['SIoPSDetails'] : 'N/A';
    $IG = isset($data['IG']) ? $data['IG'] : 'N/A';
    $IGDetails = isset($data['IGDetails']) ? $data['IGDetails'] : 'N/A';
    $PwD = isset($data['PwD']) ? $data['PwD'] : 'N/A';
    $PwDDetails = isset($data['PwDDetails']) ? $data['PwDDetails'] : 'N/A';
    $SP = isset($data['SP']) ? $data['SP'] : 'N/A';
    $SPDetails = isset($data['SPDetails']) ? $data['SPDetails'] : 'N/A';
    $References = isset($data['References']) ? $data['References'] : 'N/A';
    $GIID = isset($data['GIID']) ? $data['GIID'] : 'N/A';
    $ID_L_PNO = isset($data['ID_L_PNO']) ? $data['ID_L_PNO'] : 'N/A';
    $D_Pol = isset($data['D_Pol']) ? $data['D_Pol'] : 'N/A';
} else {
    die("No data found for the specified user.");
}

$conn->close();
?>

<?php include 'copy.php'; ?>
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
            <td colspan="1" style="border:1px solid#000b;background:#757575;width: 10%;"><small>1. CS ID No.</small></td>
            <td colspan="2" class="text-right" style="border:1px solid #000;width:20%;"><small>(Do not fill up. For CSC use only)</small><br><?php echo "CSID: " . $CSID . "<br>" ?></td>
          </tr>
        </tbody>
        <!-- I. PERSONAL INFORMATION -->
        <tbody class="page1">
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
            <td colspan="5"><?php echo $DateOfBirth . "<br>"; ?></td>
            <td colspan="3" class="s-label align-top border-bottom-0">
              <span class="count">16.</span> CITIZENSHIP
            </td>
            <td colspan="3"><?php echo $Citizenship1 . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-0"></td>
            <td colspan="5"><?php echo $data['PlaceOfBirth']; ?></td>
            <td colspan="3" class="s-label align-top border-0 text-center small">If holder of dual citizenship,</td>
            <td colspan="3"><?php echo $Citizenship2 . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">4.</span> PLACE OF BIRTH</td>
            <td colspan="5"><?php echo $data['PlaceOfBirth']; ?></td>
            <td colspan="3" class="s-label align-top border-0 text-center small">please indicate the details.</td>
            <td colspan="3"><?php echo $DualCountry . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">5.</span> SEX</td>
            <td colspan="5"><?php echo $data['Sex']; ?></td>
            <td colspan="3" class="s-label align-top border-0"></td>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-bottom-0"><span class="count">6.</span> CIVIL STATUS</td>
            <td colspan="5"><?php echo $CivilStatus . "<br>"; ?></td>
            <td colspan="2" class="s-label align-top border-bottom-0 small"><span class="count">17.</span> RESIDENTIAL ADDRESS</td>
            <td colspan="2"><?php echo $ResHouse_Block_LotNo ."<br>"?></td>
            <td colspan="2"><?php echo $ResStreet . "<br>";?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label border-top-0"><span class="count"></span></td>
            <td colspan="5"></td>
            <td colspan="2" class="s-label align-top border-0"></td>
            <td colspan="2"><?php echo $ResSubdivision_Village . "<br>";?></td>
            <td colspan="2"><?php echo $ResBarangay . "<br>";?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">7.</span> HEIGHT (m)</td>
            <td colspan="5"><?php echo $data['Height']; ?></td>
            <td colspan="2" class="s-label align-top border-0"></td>
            <td colspan="2"><?php echo $ResCity_Municipality . "<br>";?></td>
            <td colspan="2"><?php echo $ResProvince . "<br>";?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">8.</span> WEIGHT (kg)</td>
            <td colspan="5"><?php echo $data['Weight']; ?></td>
            <td colspan="2" class="s-label border-0 text-center">ZIP CODE</td>
            <td colspan="4"><?php echo $ResZipCode . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">9.</span> BLOOD TYPE</td>
            <td colspan="5"><?php echo $data['BloodType']; ?></td>
            <td colspan="2" class="s-label border-bottom-0"><span class="count">18.</span> PERMANENT ADDRESS </td>
            <td colspan="2"><?php echo $PerHouse_Block_LotNo . "<br>"; ?></td>
            <td colspan="2"><?php echo $PerStreet . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">10.</span> GSIS ID NO.</td>
            <td colspan="5"><?php echo $GSIS . "<br>"; ?></td>
            <td colspan="2" class="s-label border-0"></td>
            <td colspan="2"><?php echo $PerSubdivision_Village . "<br>"; ?></td>
            <td colspan="2"><?php echo $PerBarangay . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">11.</span> PAG-IBIG NO.</td>
            <td colspan="5"><?php echo $PagIBIG . "<br>"; ?></td>
            <td colspan="2" class="s-label border-0"></td>
            <td colspan="2"><?php echo $PerCity_Municipality . "<br>"; ?></td>
            <td colspan="2"><?php echo $PerProvince . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">12.</span> PHILHEALTH NO.</td>
            <td colspan="5"><?php echo $PHILHEALTH . "<br>"; ?></td>
            <td colspan="2" class="s-label text-center border-0">ZIP CODE</td>
            <td colspan="4"><?php echo $PerZipCode . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">13.</span> SSS NO.</td>
            <td colspan="5"><?php echo $SSS . "<br>"; ?></td>
            <td colspan="2" class="s-label"><span class="count">19.</span> TELEPHONE NO.</td>
            <td colspan="4"><?php echo $TelephoneNumber . "<br>"; ?></td>
            <tr>
            <td colspan="1" class="s-label"><span class="count">14.</span> TIN NO.</td>
            <td colspan="5"><?php echo $TIN . "<br>"; ?></td>
            <td colspan="2" class="s-label"><span class="count">20.</span> MOBILE NO.</td>
            <td colspan="4"><?php echo $MobileNumber . "<br>"; ?></td>
          </tr>
          <tr>
            <td colspan="1" class="s-label"><span class="count">15.</span> AGENCY EMPLOYEE NO.</td>
            <td colspan="5"><?php echo $AgencyNo . "<br>"; ?></td>
            <td colspan="2" class="s-label"><span class="count">21.</span> EMAIL ADDRESS (if any)</td>
            <td colspan="4"><?php echo $EmailAdd . "<br>"; ?></td>
          </tr>

        <!-- II. FAMILY BACKGROUND -->

  <tr>
    <td colspan="12" class="text-white separator">II. FAMILY BACKGROUND</td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-bottom-0">
      <span class="count">22.</span> SPOUSE SURNAME
    </td>
    <td colspan="5"><?php echo $Spouse_Surname . "<br>"; ?></td>
    <td colspan="3" class="s-label">
      <span class="count">23.</span> NAME of CHILDREN (Write full name and list all)
    </td>
    <td colspan="3" class="s-label text-center" style="width: 18%;">DATE OF BIRTH (mm/dd/yyyy)</td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> FIRST NAME
    <td colspan="5"><?php echo $Spouse_Firstname . "<br>"; ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][0]['ChildFullName'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][0]['DateOfBirth'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-0">
      <span class="count"></span> MIDDLE NAME
    </td>
    <td colspan="5"><?php echo $Spouse_Middlename . "<br>"; ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][1]['ChildFullName'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][1]['DateOfBirth'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> OCCUPATION
    </td>
    <td colspan="5"><?php
$Spouse_Occupation = isset($data['Spouse_Occupation']) ? $data['Spouse_Occupation'] : 'N/A';
echo $Spouse_Occupation . "<br>";
?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][2]['ChildFullName'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][2]['DateOfBirth'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
  </tr>

<!-- Part 3: Spouse (Employer/Business, Address, Telephone) and Parents -->

  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> EMPLOYER/BUSINESS NAME
    </td>
    <td colspan="5"><?php echo $Spouse_Employer_Businessname . "<br>"; ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][3]['ChildFullName'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][3]['DateOfBirth'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> BUSINESS ADDRESS
    </td>
    <td colspan="5"><?php echo $Spouse_BusinessAddress . "<br>"; ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][4]['ChildFullName'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][4]['DateOfBirth'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label">
      <span class="count"></span> TELEPHONE NO.
    </td>
    <td colspan="5"><?php echo $Spouse_TelephoneNumber . "<br>"; ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][5]['ChildFullName'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
    <td colspan="3"><?php echo htmlspecialchars($data['Spouse_Children'][5]['DateOfBirth'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
  </tr>
  <tr>
    <td colspan="1" class="s-label border-bottom-0">
      <span class="count">24.</span> FATHER'S SURNAME
    </td>
    <td colspan="5"><?php
$Father_Surname = isset($data['Father_Surname']) ? $data['Father_Surname'] : 'N/A';
echo $Father_Surname . "<br>";?></td>
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
<!-- III. EDUCATIONAL BACKGROUND -->
  <tr>
    <td colspan="12" class="text-white separator">III. EDUCATIONAL BACKGROUND</td>
  </tr>
  <tr class="text-center" style="margin-bottom: 100px;">
    <td colspan="1" class="s-label border-bottom-0" >
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
    <td colspan="1" class="s-label"><div style="margin-bottom: 10px;">
    <span class="count" style="margin-bottom: 40px; margin-right: -10px;"></span> ELEMENTARY
  </div></td>
    <td colspan="4"><?php echo $NOF_Elementary . "<br>"; ?></td>
    <td colspan="2"><?php echo $BE_D_C_Elementary . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_From_Elementary . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_To_Elementary . "<br>"; ?></td>
    <td colspan="1"><?php echo $HL_UE_Elementary . "<br>"; ?></td>
    <td colspan="1"><?php echo $YR_G_Elementary . "<br>"; ?></td>
    <td colspan="1"><?php echo $Scho_AHR_Elementary . "<br>"; ?></td>
  </tr>
  <tr>
  <td colspan="1" class="s-label"><div style="margin-bottom: 10px;">
    <span class="count" style="margin-bottom: 40px; margin-right: -10px;"></span> SECONDARY
  </div></td>
    <td colspan="4"><?php
$NOF_Secondary = isset($data['NOF_Secondary']) ? $data['NOF_Secondary'] : 'N/A';
echo $NOF_Secondary . "<br>";
?></td>
    <td colspan="2"><?php echo $BE_D_C_Secondary . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_From_Secondary . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_To_Secondary . "<br>"; ?></td>
    <td colspan="1"><?php echo $HL_UE_Secondary . "<br>"; ?></td>
    <td colspan="1"><?php echo $YR_G_Secondary . "<br>"; ?></td>
    <td colspan="1"><?php echo $Scho_AHR_Secondary . "<br>"; ?></td>
  </tr>
  <tr>
  <td colspan="1" class="s-label"><div style="margin-bottom: 10px;">
    <span class="count" style="margin-bottom: 40px; margin-right: -10px;"></span> VOCATIONAL/</br>
    <span class="count" style="margin-bottom: 20px; margin-right: -10px;"></span> TRADE COURSE</br>
  </div></td>
    <td colspan="4"><?php echo $NOF_Vocational . "<br>"; ?></td>
    <td colspan="2"><?php echo $BE_D_C_Vocational . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_From_Vocational . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_To_Vocational . "<br>"; ?></td>
    <td colspan="1"><?php echo $HL_UE_Vocational . "<br>"; ?></td>
    <td colspan="1"><?php echo $YR_G_Vocational . "<br>"; ?></td>
    <td colspan="1"><?php echo $Scho_AHR_Vocational . "<br>"; ?></td>
  </tr>
  <tr>
  <td colspan="1" class="s-label"><div style="margin-bottom: 10px;">
    <span class="count" style="margin-bottom: 40px; margin-right: -10px;"></span> COLLEGE
  </div></td>
    <td colspan="4"><?php echo $NOF_College . "<br>"; ?></td>
    <td colspan="2"><?php echo $BE_D_C_College . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_From_College . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_To_College . "<br>"; ?></td>
    <td colspan="1"><?php echo $HL_UE_College . "<br>"; ?></td>
    <td colspan="1"><?php echo $YR_G_College . "<br>"; ?></td>
    <td colspan="1"><?php echo $Scho_AHR_College . "<br>"; ?></td>
  </tr>
  <tr>
  <td colspan="1" class="s-label"><div style="margin-bottom: 10px;">
    <span class="count" style="margin-bottom: 40px; margin-right: -10px;"></span> GRADUATE</br>
    <span class="count" style="margin-bottom: 20px; margin-right: -10px;"></span> STUDIES</br>
  </div></td>
    <td colspan="4"><?php echo $NOF_Graduate . "<br>"; ?></td>
    <td colspan="2"><?php echo $BE_D_C_Graduate . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_From_Graduate . "<br>"; ?></td>
    <td colspan="1"><?php echo $POA_To_Graduate . "<br>"; ?></td>
    <td colspan="1"><?php echo $HL_UE_Graduate . "<br>"; ?></td>
    <td colspan="1"><?php echo $YR_G_Graduate . "<br>"; ?></td>
    <td colspan="1"><?php echo $Scho_AHR_Graduate . "<br>"; ?></td>
  </tr>
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
 
<div class="page-break"></div>

<!-- IV. CIVIL SERVICE ELIGIBILITY -->
<tbody class="page2">
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
    <td colspan="1" class="s-label border-bottom-0">NUMBER</td>
    <td colspan="1" class="s-label border-bottom-0">Date of Validity</td>
  </tr>
  <?php if (!empty($data['CivilService'])): ?>
    <?php foreach ($data['CivilService'] as $civilServiceData): ?>
      <tr class="text-center">
        <td colspan="5">
          <?= htmlspecialchars($civilServiceData['CS_RA_CES_CSEE_DL'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($civilServiceData['Rating'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="2">
          <?= htmlspecialchars($civilServiceData['DOT_C'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="2">
          <?= htmlspecialchars($civilServiceData['POE_C'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($civilServiceData['LNumber'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($civilServiceData['LValidity'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
      </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <tr class="text-center">
      <td colspan="12">No Civil Service data available.</td>
    </tr>
  <?php endif; ?>
  <tr>
  <td colspan="5"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
</tr>

<tr>
  <td colspan="5"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
</tr>
<tr>
  <td colspan="5"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
</tr>
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>

<!-- V. WORK EXPERIENCE -->

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
    </td>
    <td colspan="2" class="s-label border-bottom-0">
      DEPARTMENT/AGENCY/OFFICE/COMPANY<br>(Write in full/Do not abbreviate)<br>
      
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
      </table>
    </td>
    <td colspan="5" class="s-label border-top-0">
    </td>
    <td colspan="2" class="s-label border-top-0">
    </td>
    <td colspan="1" class="s-label border-top-0">
    
    </td>
    <td colspan="1" class="s-label border-top-0">
    
    </td>
    <td colspan="1" class="s-label border-top-0">
    
    </td>
    <td colspan="1" class="s-label border-top-0">
    </td>
  </tr>
  <tr>
  <?php if (!empty($data['WorkExperience'])): ?>
    <?php foreach ($data['WorkExperience'] as $WorkExperience): ?>
      <tr class="text-center">
        <td colspan="2">
          <?= htmlspecialchars($WorkExperience['V_I_D_From'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?> - 
          <?= htmlspecialchars($WorkExperience['V_I_D_To'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="4">
          <?= htmlspecialchars($WorkExperience['V_PosTitle'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="2">
          <?= htmlspecialchars($WorkExperience['V_D_A_O_C'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($WorkExperience['V_MS'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($WorkExperience['V_S_J_PG'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
          <td colspan="1">
          <?= htmlspecialchars($WorkExperience['V_SOA'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($WorkExperience['V_GOS'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        </td>
      </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td colspan="12" class="text-center">No L&D data available.</td>
    </tr>
  <?php endif; ?>
  </tr>
  <tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>

<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 40px;"></div></td>
</tr>
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

<!-- VI. VOLUNTARY WORK OR INVOLVEMENT -->
<tbody class="page3">
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
    <td colspan="6" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label">From<br></td>
    <td colspan="1" class="s-label">To<br></td>
    <td colspan="1" class="s-label border-top-0"></td>
    <td colspan="3" class="s-label border-top-0"></td>
  </tr>
  <tr>
  <?php if (!empty($data['VoluntaryWork'])): ?>
    <?php foreach ($data['VoluntaryWork'] as $volWork): ?>
      <tr>
        <td colspan="2">
          <?= htmlspecialchars($volWork['NAOF'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="4">
          <?= htmlspecialchars($volWork['VI_POS_NOW'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="2">
          <?= htmlspecialchars($volWork['VI_I_D_From'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?> - 
          <?= htmlspecialchars($volWork['VI_I_D_To'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($volWork['VI_NOF'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="3">
          <?= htmlspecialchars($volWork['VI_POS_NOW'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
      </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td colspan="12" class="text-center">No Volunteer Work data available.</td>
    </tr>
  <?php endif; ?>
  <tr>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="3"><div style="margin-bottom: 50px;"></div></td>
</tr>

<tr>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="3"><div style="margin-bottom: 50px;"></div></td>
</tr>
<tr>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="4"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 50px;"></div></td>
  <td colspan="3"><div style="margin-bottom: 50px;"></div></td>
</tr>
  <tr>
    <td colspan="12" class="text-white separator bg-transparent text-danger text-center">
      <i>(Continue on separate sheet if necessary)</i>
    </td>
  </tr>

<div class="page-break"></div>

<!-- VII. (Alternate Voluntary Work as Learning & Development) -->
  <tr>
    <td colspan="12" class="text-white separator">
      VII. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S<br>
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
    <td colspan="6" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label">From</td>
    <td colspan="1" class="s-label">To</td>
    <td colspan="1" class="s-label border-top-0"></td>
    <td colspan="1" class="s-label border-top-0"></td>
    <td colspan="2" class="s-label border-top-0"></td>
  </tr>
  <tr>
    <td colspan="12" class="text-white separator">VIII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS</td>
  </tr>
  <?php if (!empty($data['LAD'])): ?>
    <?php foreach ($data['LAD'] as $lad): ?>
      <tr class="text-center">
        <td colspan="6">
          <?= htmlspecialchars($lad['TOLADI_TP'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($lad['VII_I_D_From'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?> - 
          <?= htmlspecialchars($lad['VII_I_D_To'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($lad['VII_NOF'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($lad['VII_TOLD'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="1">
          <?= htmlspecialchars($lad['VII_POS_NOF'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
        <td colspan="2">
          <?= htmlspecialchars($lad['Conducted_By'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
        </td>
      </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td colspan="12" class="text-center">No L&D data available.</td>
    </tr>
  <?php endif; ?>

<!-- VIII. OTHER INFORMATION -->
<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>
<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>
<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>
<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>
<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>
<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

<tr>
  <td colspan="6"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="1"><div style="margin-bottom: 35px;"></div></td>
  <td colspan="2"><div style="margin-bottom: 35px;"></div></td>
</tr>

					<tr>
						<td colspan="12" class="text-white separator bg-transparent text-danger text-center">
							<i>(Continue on seperate sheet if necessary)</i>
						</td>
					</tr>
					<tr>
						<td colspan="12" class="text-white separator">VIII.  OTHER INFORMATION</td>
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
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_SSH']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_AR']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_MAO']; ?></div></td>
</tr>
<tr>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_SSH1']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_AR1']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_MAO1']; ?></div></td>
</tr>
<tr>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_SSH2']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_AR2']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_MAO2']; ?></div></td>
</tr>
<tr>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_SSH3']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_AR3']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_MAO3']; ?></div></td>
</tr>
<tr>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_SSH4']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_AR4']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_MAO4']; ?></div></td>
</tr>
<tr>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_SSH5']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_AR5']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_MAO5']; ?></div></td>
</tr>
<tr>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_SSH6']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_AR6']; ?></div></td>
  <td colspan="4"><div style="margin-bottom: 60px;"><?php echo $data['O_MAO6']; ?></div></td>
</tr>

					<tr>
						<td colspan="12" class="text-white separator bg-transparent text-danger text-center">
							<i>(Continue on seperate sheet if necessary)</i>
						</td>
					</tr>
					<tr>
    <td colspan="4" class="text-center"><i><b>SIGNATURE</b></i></td>
    <td colspan="3"></td>
    <td colspan="1" class="text-center"><i><b>DATE</b></i></td>
    <td colspan="4"></td>
    

</tr>
<tr style="page-break-after: always;"></tr>
				</tbody>
        
        
<!-- End of Page 3 -->

<!-- Q1: RELATIVE QUESTIONS -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="12" class="separator"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label border-bottom-0" style="padding: 2px 4px; line-height: 1.2;">
      <span class="count">34.</span> Are you related by consanguinity or affinity to the appointing or recommending authority, or to the<br>
      <span class="count"></span>chief of bureau or office or to the person who has immediate supervision over you in the Office,<br>
      <span class="count"></span>Bureau or Department where you will be appointed,
    </td>
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 2px 4px; font-size: 12px;">
      <span class="count"></span>a. within the third degree?<br>
    </td>
    <td colspan="2"><?php echo $TD . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 2px 4px; font-size: 12px;">
      <span class="count"></span>b. within the fourth degree (for Local Government Unit - Career Employees)?
    </td>
    <td colspan="2"><?php echo $FD . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, give details:</td>
    <td colspan="3"><?php echo $FDDetails . "<br>"; ?></td>
  </tr>
</tbody>


<!-- Q2: ADMINISTRATIVE OFFENSE -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0" style="padding: 1px 4px; font-size: 10px; line-height: 1.2;">
      <span class="count">35.</span> a. Have you ever been found guilty of any administrative offense?
    </td>
    <td colspan="2" style="padding: 1px 4px; font-size: 11px;"><?php echo $AO . ""; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 1px 4px;"></td>
    <td colspan="5" style="padding: 1px 4px; font-size: 10px;">If YES, give details: <?php echo $AODetails . ""; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 1px 4px;"></td>
    
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 1px 4px; font-size: 10px;">
      <span class="count"></span> b. Have you been criminally charged before any court?
    </td>
    <td colspan="2" style="border-top-width: 1px !important; padding: 1px 4px; font-size: 10px;"><?php echo $CC . ""; ?></td>
    <td colspan="3" style="border-top-width: 1px !important;"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 1px 4px;"></td>
    <td colspan="5" style="padding: 1px 4px; font-size: 10px;">If YES, give details:</td>
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 1px 4px;"></td>
    <td colspan="2" style="padding: 1px 4px; font-size: 10px;">Date Filed:</td>
    <td colspan="3" style="padding: 1px 4px; font-size: 10px;"><?php echo $CCDate . ""; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label" style="padding: 1px 4px;"></td>
    <td colspan="2" style="padding: 1px 4px; font-size: 10px;">Status of Case/s:</td>
    <td colspan="3" style="padding: 1px 4px; font-size: 10px;"><?php echo $CCSOC . ""; ?></td>
  </tr>

</tbody>



<!-- Q3: CONVICTION -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">36.</span> Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
    </td>
    <td colspan="2"><?php echo $CoV . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="5">If YES, give details: <?php echo $CoVDetails . "<br>"; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="5"></td>
  </tr>
</tbody>

<!-- Q4: SEPARATION FROM SERVICE -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count" >37.</span> Have you ever been separated from the service in any of the following modes: resignation,<br>
    </td>
    <td colspan="2"><?php echo $data['SFTS']; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span> retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased
    </td>
    <td colspan="5">If YES, give details: <?php echo $data['SFTSDetails']; ?></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span> out (abolition) in the public or private sector?
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
</tbody>

<!-- Q5: ELECTION AND RESIGNATION -->
<tbody class="table-body question-block">
  <tr>
    <td colspan="7" class="s-label border-bottom-0">
      <span class="count">38.</span> a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
    </td>
    <td colspan="2"><?php echo $CNOLE . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, give details: <?php echo $CNOLEDetails . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span> b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?
    </td>
    <td colspan="2"><?php echo $RGS . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, give details: <?php echo $RGSDetails . "<br>"; ?></td>
    <td colspan="3"></td>
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
    <td colspan="2"><?php echo $SIoPS . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, give details (country): <?php echo $SIoPSDetails . "<br>"; ?></td>
    <td colspan="3"></td>
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
    <td colspan="3"></td> <!-- upper 1st-->
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>a. Are you a member of any indigenous group?<br>
    </td>
    <td colspan="2"><?php echo $data['IG']; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="4">If YES, please specify: <?php echo $data['IGDetails']; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>b. Are you a person with disability?
    </td>
    <td colspan="2"><?php echo $data['PwD']; ?><</td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, please specify: <?php echo $PwDDetails . "<br>"; ?></td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="7" class="s-label">
      <span class="count"></span>c. Are you a solo parent? 
    </td>
    <td colspan="3"><?php echo $data['SP']; ?><</td>
  </tr>
  <tr>
    <td colspan="7" class="s-label"></td>
    <td colspan="2">If YES, please specify: <?php echo $SPDetails . "<br>"; ?></td>
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
<?php for ($i = 0; $i < 3; $i++): ?>
  <tr>
    <?php if (!empty($data['References'][$i])): ?>
      <td colspan="4">
        <?= htmlspecialchars($data['References'][$i]['RefName'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
      </td>
      <td colspan="2">
        <?= htmlspecialchars($data['References'][$i]['RefAddress'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
      </td>
      <td colspan="2">
        <?= htmlspecialchars($data['References'][$i]['RefTelNo'] ?? 'N/A', ENT_QUOTES, 'UTF-8') ?>
      </td>
    <?php else: ?>
      <td colspan="4"></td>
      <td colspan="2"></td>
      <td colspan="2"></td>
    <?php endif; ?>
  </tr>
<?php endfor; ?>
</tbody>
  <tr>
    <td colspan="8">
      <span class="count">42.</span> I declare under oath that I have personally accomplished this Personal Data Sheet which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. I authorize the agency head / authorized representative to verify/validate the contents stated herein. I agree that any misrepresentation made in this document and its attachments shall cause the filing of administrative/criminal case/s against me.
    </td>
  </tr>
      </tbody>
      
  <tr>
    <td colspan="12" class="border-0 p-0 move-up">
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
                    <td style="width: 30%;"><?php echo $GIID . "<br>"; ?></td>
                  </tr>
                  <tr>
                    <td style="width: 30%;"><?php echo $ID_L_PNO . "<br>"; ?></td>
                  </tr>
                  <tr>
                    <td style="width: 30%;"><?php echo $D_Pol . "<br>"; ?></td>
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
<script defer src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
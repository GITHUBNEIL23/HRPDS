<?php
require_once 'assets/insert.php';
?>
<form method="POST" action="insert.php">
    <input type="text" name="CSID" placeholder="CSID">
    <input type="text" name="Surname" placeholder="Surname">
    <input type="text" name="Firstname" placeholder="Firstname">
    <input type="text" name="NameExtension" placeholder="Name Extension">
    <input type="text" name="MiddleName" placeholder="Middle Name">
    <input type="date" name="DateOfBirth" placeholder="Date of Birth">
    <input type="text" name="PlaceOfBirth" placeholder="Place of Birth">
    <input type="text" name="Sex" placeholder="Sex">
    <input type="text" name="CivilStatus" placeholder="Civil Status">
    <input type="text" name="Height" placeholder="Height">
    <input type="text" name="Weight" placeholder="Weight">
    <!-- Add remaining fields similarly -->
    <button type="submit">Submit</button>
</form>
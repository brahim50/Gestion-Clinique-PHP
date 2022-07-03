<?php
session_start();
$msg = "Dr";
require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nom = $_POST['name'];
    $tem = $_POST['tem'];
    $ten = $_POST['ten'];
    $poi = $_POST['poi'];
    $dete = $_POST['dete'];
    $medi = $_POST['medi'];
    $sql = "INSERT INTO patientdetail VALUES ('$id','$nom','$tem','$ten','$poi','$dete','$medi')";
    $result = mysqli_query($db,$sql);
    





}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" >
    <title>Dossier Patient</title>
</head>
<body>
    <!-- nav-bar vertical -->

<div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#"
                                                                                   class="brand-logo"><i
                class="fas fa-anchor"></i> <span><?php    echo $msg." " .$_SESSION['username'];  ?></span></a></header>
        <nav class="dashboard-nav-list">
            <a
                href="medecin.php?id=<?php echo $_SESSION['id'];?>" class="dashboard-nav-item active">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg> PROFIL
        </a>
        <a href="dash.php?id=<?php echo $_SESSION['id'];?>" class="dashboard-nav-item"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
  <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>
Agenda et créneaux </a>
            
        <a href="listePatient.php?id=<?php echo $_SESSION['id'];?>" class="dashboard-nav-item"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> LISTE PATIENT </a>
<a
                    href="dossierP.php?id=<?php echo $_SESSION['id'];?>" class="dashboard-nav-item"><svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg> DOSSIER PATIENT </a>
            <a
                    href="deco.php" class="dashboard-nav-item"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg> LOGOUT </a>
        </nav>
        
</div>


<!--END navbar vertical -->
<form action="#" method="POST" >
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 50px;">
  
  <input type="number" name="id" id="special" class="form-control" placeholder="ID" aria-label="spécialité" aria-describedby="basic-addon1" id="inp">
</div>
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 95px;">
  
  <input type="text" name="name" id="special" class="form-control" placeholder="Patient Name" aria-label="spécialité" aria-describedby="basic-addon1" id="inp">
</div>
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 140px;">
  
  <input type="text" name="tem" id="special" class="form-control" placeholder="température C°" aria-label="spécialité" aria-describedby="basic-addon1" id="inp">
</div>
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 190px;">
  
  <input type="text" name="ten"  class="form-control" placeholder="tension" aria-label="Email" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 240px;">
  <input type="text" name="poi"  class="form-control" placeholder="poids EN KG" aria-label="ville" aria-describedby="basic-addon1" id="inp">
</div>
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 290px;">
  <input type="text" name="dete"  class="form-control" placeholder="détection d’allergies" aria-label="tele" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 350px;">
  <input type="text" name="medi" id="tarif" class="form-control" placeholder="médicaments prescrits" aria-label="tarifs" aria-describedby="basic-addon1" >
</div>
<button type="submit" name="submit" id="submit"  class="btn btn-primary btn-lg" style="margin-top: 400px;font-size: 17px;width: 400px;margin-left: 500px">
    SUBMIT</button>
    </form>
</body>
</html>
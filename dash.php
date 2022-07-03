<?php
session_start();
$msg = "Dr";
require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
if(isset($_POST['submit'])){
$id=$_SESSION['id'];
$username = $_SESSION['username'];
$day = $_POST['day'];
$debut = $_POST['st'];
$fin = $_POST['et'];
$duree = $_POST['durc'];
$jnd = $_POST['jnd'];
$dremplacent = $_POST['dr'];
$dremplacentday = $_POST['drday'];
$dremplacentdebut = $_POST['drst'];
$dremplacentfin = $_POST['dret'];
$dremplacentduree = $_POST['drdc'];
$sql = "INSERT INTO drcreneaux VALUES ('','$id','$username','$day','$debut','$fin','$duree','$jnd','$dremplacent','$dremplacentday','$dremplacentdebut','$dremplacentfin','$dremplacentduree')";
$result = mysqli_query($db,$sql);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>agenda et créneaux</title>
    
  <script type="text/javascript" src="lib/tpicker.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    </head>
<style>
.lab2{
    position: absolute;
    margin-left: 200px;
    margin-top: 67px;
    font-size:18px;
}
select{
    position: absolute;
    max-width: 400px;
    left: 250px;
    
}
.div{
    position: absolute;
    width: 400px;
    margin-top: 240px;
    
}
table thead tr td{
  margin-right: 40px;
}
</style>
<body>
  <!-- nav-bar vertical -->

  <div class="dashboard-nav">
        <header><a href="#" class="menu-toggle"></a><a href="#"
                                                                                   class="brand-logo"> <span><?php    echo $msg." " .$_SESSION['username'];  ?></span></a></header>
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
            <a
                    href="deco.php" class="dashboard-nav-item"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg> LOGOUT </a>
        </nav>
        
</div>


<!--END navbar vertical -->
<div class="card" style="margin-left: 250px; height: 800px;margin-right: 100px;margin-top:15px;">
  <h5 class="card-header h5" style="background-color: #3477eb; color:white;font-size:15px ;" >
  Agenda et créneaux

  </h5>
  <div class="card-body">
    <form action="#" method="POST">
    
    <label for="selec" style="margin-top: 8px;position: absolute;margin-left: 249px; font-size:18px;">DAY *</label>
    <select class="form-select" name="day" aria-label="Default select example" id="selec" style="margin-left: 90px;">
  <option selected value="LUNDI">LUNDI</option>
  <option value="MARDI">MARDI</option>
  <option value="MERCREDI">MERCREDI</option>
  <option value="JEUDI">JEUDI</option>
  <option value="VENDREDI">VENDREDI</option>
  <option value="SAMEDI">SAMEDI</option>
</select>
<label for="inputMDEx1" class="lab2">Start Time *</label>
<div class="md-form " style="width: 200px;position: absolute;margin-top: 60px;margin-left: 320px;" >
  <input type="time" name="st" id="inputMDEx1" class="form-control">
  
</div>
    <label for="inputMDEx2" style="position: absolute;margin-left: 203px;margin-top:128px;font-size:18px;">END Time *</label>
    <div class="md-form " style="width:200px; position: absolute;margin-top: 120px;left:340px;" >
  <input type="time" name="et" id="inputMDEx2" class="form-control">
</div>
<label for="select" style="position: absolute;margin-left: 114px;margin-top: 187px;">DUREE CONSULTATION *</label>
<div class="div">
<select class="form-select" name="durc" aria-label="Default select example" id="select" style="position: absolute; margin-top: -62px;margin-left: 70px;">
  <option selected value="30MIN">30MIN</option>
  <option value="45MIN">45MIN</option>
  <option value="1H">1H</option>
  <option value="1H15MIN">1H15MIN</option>
  <option value="1H30MIN">1H30MIN</option>
  <option value="1H45MIN">1H45MIN</option>
  <option value="2H">2H</option>
</select>
</div>
<label for="select2" style="position: absolute;margin-left:107px;margin-top: 250px;">JOURS NON DISPONIBLE *</label>
<div class="div2" style="position: absolute;width: 400px;margin-top: 240px;margin-left: 70px;" >
<select class="form-select" name="jnd" aria-label="Default select example" id="select2">
<option selected value="LUNDI">LUNDI</option>
  <option value="MARDI">MARDI</option>
  <option value="MERCREDI">MERCREDI</option>
  <option value="JEUDI">JEUDI</option>
  <option value="VENDREDI">VENDREDI</option>
  <option value="SAMEDI">SAMEDI</option>
  <option value="DIMANCHE">DIMANCHE</option>
</select>
</div>
<label for="inp"style="position: absolute;margin-left: 120px;margin-top: 310px;" >DOCTOR REMPLACENT *</label>
<div class="input-group mb-3"style="position: absolute;width: 400px;margin-top:300px;margin-left: 320px;">
  
  <input type="text" name="dr" class="form-control" placeholder="DOCTOR REMPLACENT" aria-label="Username" aria-describedby="basic-addon1" id="inp" >
</div>
    <h1 style="position:absolute;margin-top: 360px;margin-left: 270px;color:#3477eb;">DOCTOR REMPLACENT</h1>
    <label for="selec1" style="margin-top: 430px;position: absolute;margin-left: 249px; font-size:18px;">DAY *</label>
    <select class="form-select" name="drday" aria-label="Default select example" id="selec1" style="margin-left: 90px;margin-top: 420px;">
  <option selected value="LUNDI">LUNDI</option>
  <option value="MARDI">MARDI</option>
  <option value="MERCREDI">MERCREDI</option>
  <option value="JEUDI">JEUDI</option>
  <option value="VENDREDI">VENDREDI</option>
  <option value="SAMEDI">SAMEDI</option>
</select>
<label for="inputMDEx3" style="position: absolute;margin-left: 200px;margin-top: 489px;font-size:18px;">Start Time *</label>
<div class="md-form " style="width: 200px;position: absolute;margin-top: 480px;margin-left: 320px;" >
  <input type="time" name="drst" id="inputMDEx3" class="form-control">
</div>
<label for="inputMDEx4" style="position: absolute;margin-left: 203px;margin-top:550px;font-size:18px;">END Time *</label>
<div class="md-form " style="width:200px; position: absolute;margin-top: 540px;left:340px;" >
  <input type="time" name="dret" id="inputMDEx4" class="form-control">
</div>
<label for="selectz" style="position: absolute;margin-left: 114px;margin-top: 620px;">DUREE CONSULTATION *</label>
<div class="div">
<select class="form-select" name="drdc" aria-label="Default select example" id="selectz" style="position: absolute; margin-top: 370px;margin-left: 70px;">
  <option selected value="30MIN">30MIN</option>
  <option value="45MIN">45MIN</option>
  <option value="1H">1H</option>
  <option value="1H15MIN">1H15MIN</option>
  <option value="1H30MIN">1H30MIN</option>
  <option value="1H45MIN">1H45MIN</option>
  <option value="2H">2H</option>
</select>
</div>
<button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin-top: 670px;font-size: 15px;width: 300px;margin-left: 320px;">
    SUBMIT</button>
        </form>  
        </div>
</div>

<!-- afichage data -->
<div class="table-responsive">
<table class="table" style="margin-left: 210px;margin-top: 50px; ">
                <thead>
                    <tr>
                    <th>#</th>
                        <th>ID</th>
                        <th>DOCTOR NAME</th>
                        <th>DAY</th>
                        <th>Start Time</th>
                        <th>END Time</th>
                        <th>DUREE CONSULTATION </th>
                        <th>JOURS NON DISPONIBLE </th>
                        <th>DOCTOR REMPLACENT  </th>
                        <th>DOCTOR REMPLACENT DAY</th>
                        <th>DOCTOR REMPLACENT Start Time</th>
                        <th>DOCTOR REMPLACENT END Time </th>
                        <th>DOCTOR REMPLACENT DUREE CONSULTATION </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($_GET['id'])){
                  $ide=$_GET['id'];
                }
                $query ="SELECT *FROM drcreneaux WHERE id='$ide';";
                $res = mysqli_query($db,$query);
               while($row = $res->fetch_assoc()){
                ?>
                <tr>
                         <td><?php echo $row['IDM'];?></td>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['day'];?></td>
                        <td><?php echo $row['startime'];?></td>
                        <td> <?php echo $row['endtime'];?></td>
                        <td><?php echo $row['dureeC'];?></td>
                        <td><?php echo $row['joursND'];?></td>
                        <td> <?php echo $row['dr'];?></td>
                        <td><?php echo $row['drday'];?></td>
                        <td><?php echo $row['drstartime'];?></td>
                        <td><?php echo $row['drendtime'];?></td>
                        <td><?php echo $row['drduree'];?></td>
                        <td><a href="delete.php?ida=<?php echo $row['IDM'];?>" class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash" style="margin-right: 6px;"></i>SUPPRIMER</a></td>
                        
                    </tr>
                    <?php };  ?>
                    </tbody>
            </table>
            </div>
                              



  




</body>

</html>
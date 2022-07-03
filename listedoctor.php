<?php
session_start();
require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
if(isset($_POST['submit'])){
  $searchspe = $_POST['searchSPE'];
  $sql = "SELECT *FROM medecin WHERE special = '$searchspe'";
  $result = mysqli_query($db,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE DOCTOR</title>
    <link rel="stylesheet" href="style1.css" >
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- nav-bar vertical -->

<div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#"
                                                                                   class="brand-logo"> <span><?php   echo $_SESSION['username']; ?></span></a></header>
        <nav class="dashboard-nav-list">
            
        <a href="listedoctor.php" class="dashboard-nav-item"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> LISTE DOCTOR </a>
            <a
                    href="deco.php" class="dashboard-nav-item"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg> LOGOUT </a>
        </nav>
        
</div>


<!--END navbar vertical -->
<div class="card" style="margin-left: 185px; height: 800px;margin-top:15px;">
  <h5 class="card-header h5" style="background-color: #3477eb; color:white;font-size:15px ;" >
  LISTE OF DOCTOR

  </h5>
  <div class="card-body">
  <form action="#" method="POST">
      <!-- input serch -->
    <div class="main">
  
  <!-- Another variation with a button -->
  <div class="input-group" style="width: 230px; position:absolute; margin-left:30px;top:66px;">
    <input type="text" name="searchSPE" class="form-control" placeholder="Search SPECIALITE">
    <div class="input-group-append">
      <button class="btn btn-secondary" name="submit" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
      </button>
    </div>
  </div>
  
</div>
    <!-- input serch -->
    <div class="main">
  
  <!-- Another variation with a button -->
  <div class="input-group" style="width: 230px; position:absolute; margin-left:320px;top:66px;">
    <input type="text" name="searchREG" class="form-control" placeholder="Search Région">
    <div class="input-group-append">
      <button class="btn btn-secondary" name="submit" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
      </button>
    </div>
  </div>
  
</div>
    <!-- END input serch -->
    <!-- input serch -->
    <div class="main">
  
  <!-- Another variation with a button -->
  <div class="input-group" style="width: 230px; position:absolute; margin-left:670px;top:66px;">
    <input type="text" name="searchTAR" class="form-control" placeholder="Search Tarifs">
    <div class="input-group-append">
      <button class="btn btn-secondary" name="submit" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
      </button>
    </div>
  </div>
  
</div>
</form>
    <!-- END input serch -->
  <div class="table-responsive" >
  <table class="table" style="margin-top: 70px;">
  <thead>
                    <tr>
                    
                        <th>ID</th>
                        <th>DOCTOR NAME</th>
                        <th>Email</th>
                        <th>spécialité</th>
                        <th>région/ville</th>
                        <th>numéro de téléphone</th>
                        <th>tarifs</th>
                        <th>Créneaux</th>
                        <th>Fixer un rendez-vous</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                 if(isset($_POST['submit'])){
                  $searchspe = $_POST['searchSPE'];
                  $searchreg = $_POST['searchREG'];
                  $searchtar = $_POST['searchTAR'];
                 
                $query ="SELECT *FROM medecin WHERE special = '$searchspe' AND ville = '$searchreg' AND tarif = '$searchtar'";
          
                $res = mysqli_query($db,$query);
                if(mysqli_num_rows($res)>0){
               while($row = $res->fetch_assoc()){
                ?>
                <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['special'];?></td>
                        <td><?php echo $row['ville'];?></td>
                        <td><?php echo $row['tele'];?></td>
                        <td><?php echo $row['tarif'];?></td>
                        <td><a href="modalM.php?ida=<?php echo $row['id'];?>">Créneaux</a></td>
                        <th><a href="rendezVous.php?idMedecin=<?php echo $row['id'];?>?idPatient=<?php echo $_SESSION['id'];?>"> <button type="button"  class="btn btn-success"><svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-check-fill" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-2.6 5.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg>Fixer un rendez-vous</button></a></th>

                    </tr>
                    <?php $_SESSION['email']=$row['email'];$_SESSION['idD']=$row['id'];}}; } ?>
</tbody>
  </table>
            </div>
  </div>
</div>
</body>
</html>
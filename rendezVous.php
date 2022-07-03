<?php
session_start();
require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
if(isset($_POST['submit'])){
        $idM=$_SESSION['idD'];
        $idP=$_SESSION['id'];
        $emailM=$_SESSION['email'];
        $emailP=$_SESSION['emailP'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $raison = $_POST['raison'];
        $sql = "INSERT INTO rendezvous VALUES ('','$idM','$idP','$emailM','$emailP','$date','$time','$raison')";
        $result = mysqli_query($db,$sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixer un rendez-vous</title>
    <link rel="stylesheet" href="style1.css" >
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- nav-bar vertical -->

    <div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"></a><a href="#"
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
<!-- END nav-bar vertical -->
<div class="card" style="margin-left: 185px; height: 800px;margin-right: 10px;margin-top:3px;">
  <h5 class="card-header h5" style="background-color: #319609; color:white;font-size:15px ;" >
  Fixer un rendez-vous

  </h5>
  <div class="card-body">
          <form action="#" method="POST">
          <label for="date" style="position: absolute;margin-left: 300px;margin-top: 20px;font-size:18px;">Date</label>
  <div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 300px;margin-top: 50px;">
  <input type="date" name="date" id="date" class="form-control"   aria-describedby="basic-addon1" >
</div>
          <label for="time" style="position: absolute;margin-left: 300px;margin-top: 120px;font-size:18px;">Time</label>
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 300px;margin-top: 150px;">
  <input type="time" name="time" id="time" class="form-control"   aria-describedby="basic-addon1" >
</div>
          <label for="raison" style="position: absolute;margin-left: 300px;margin-top: 210px;font-size:18px;">les raisons de la consultation</label>
          <div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 300px;margin-top: 250px;">
  <input type="text" name="raison" id="raison" class="form-control" placeholder="les raisons de la consultation" aria-label="les raisons de la consultation"   aria-describedby="basic-addon1" >
</div>
<button type="submit" name="submit" id="submit"  class="btn btn-primary btn-lg" style="margin-top: 310px;font-size: 17px;width: 400px;margin-left: 300px;background-color: #319609;">
    ENVOYER</button>
    </form>
  </div>
  </div>
      

</body>
</html>


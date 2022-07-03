<?php
session_start();
require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
if(isset($_POST['submit'])){
    $id=$_SESSION['id'];
    $username = $_SESSION['username'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $phone = $_POST['phone'];
    $ville = $_POST['ville'];
    $sql = "INSERT INTO patient VALUES ('$id','$username','$email','$adresse','$phone','$ville')";
    $result = mysqli_query($db,$sql);






}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" >
    
    
    <title>WELCOME PATIENT <?php echo $_SESSION['username']; ?> </title>
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
<h1 style="position: absolute;margin-left:600px; color:#eb346e;">WELCOME <?php echo $_SESSION['username']; ?></h1>
<form action="#" method="POST">
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 80px;">
  
  <input type="email" name="email" id="email" class="form-control" placeholder="Email @" aria-label="email" aria-describedby="basic-addon1" ">
</div>

<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 150px;">
  <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Adresse" aria-label="adresse" aria-describedby="basic-addon1" ">
</div>
<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 220px;">
  <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" aria-label="phone" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3" style="position: absolute;width: 400px;margin-left: 500px;margin-top: 290px;">
  <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" aria-label="ville" aria-describedby="basic-addon1" >
</div>
<button type="submit" name="submit" id="submit"  class="btn btn-primary btn-lg" style="margin-top: 350px;font-size: 17px;width: 400px;margin-left: 500px">
    SUBMIT</button>

</form>
<script>
        $("#submit").click(function valide(){
            var email = $("#email").val();
            var adresse = $("#adresse").val();
            var phone = $("#phone").val();
            var ville = $("#ville").val();
            if(email =='' || adresse == '' || phone == '' || ville ==''){
                alert("Veillez entrer les donner!!");
        }
        else{
            alert("Patient DONNER AJOUTER SUCCES");
        }
        });
        </script>
<hr style="position: absolute;margin-left: 180px;width:1281px;">
        <!-- afichage data -->
        <table class="table table-striped table-hover" style="margin-left: 180px;margin-top: 50px; ">
                <thead>
                    <tr class="info">
                        <th>ID</th>
                        <th>PATIENT NAME</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Phone</th>
                        <th>Ville</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                 if(isset($_GET['id'])){
                   $idp=$_GET['id'];
                 }
                $query ="SELECT *FROM patient WHERE idP='$idp';";
                $res = mysqli_query($db,$query);
               while($row = $res->fetch_assoc()){
                ?>
                <tr>
                        <td><?php echo $row['idP'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['adresse'];?></td>
                        <td><?php echo $row['tele'];?></td>
                        <td><?php echo $row['ville'];?></td>
                    </tr>
                    <?php $_SESSION['emailP']=$row['email'];};  ?>
                    </tbody>
            </table>
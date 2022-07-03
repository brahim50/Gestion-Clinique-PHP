<?php
require('constant.php');
$msg="";
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $nom=$_POST['username'];
    $email=$_POST['email'];
    $role=$_POST['usertype'];
    $passwd=$_POST['passwd'];
    $query = "INSERT INTO user VALUES ('$id','$nom','$email','$role','$passwd')";
    if(mysqli_query($db,$query)){
       $msg = "user ajouter succes";
    }
    else{
        die('Une erreur est survenue');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center
     align-items-center"
     style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method="POST" action="#">
    <h1 class="text-center p-3">SING UP </h1>
    <div class="mb-3">
    <label for="id"
     class="form-label">ID</label>
    <input type="number"
     class="form-control" name="id" id="id" >
    
  </div>
  <div class="mb-3">
    <label for="username"
     class="form-label">username</label>
    <input type="text"
     class="form-control" name="username" id="username" >
    
  </div>
  <div class="mb-3">
    <label for="email"
     class="form-label">EMAIL</label>
    <input type="email"
     class="form-control" name="email" id="email" >
    
  </div>
  <div class="mb-1">
    <label class="form-label">user type</label>
    
  </div>
  <select class="form-select mb-3" aria-label="Default select example" name="usertype" id="usertype">
  <option selected value="doctor">DOCTOR</option>
  <option value="patient">PATIENT</option>
  
</select>
  <div class="mb-3">
    <label for="passwd"
     class="form-label">password</label>
    <input type="password"
     class="form-control" name="passwd" id="passwd" >
    
  </div>
    
  
  <div class="d-grid gap-2">
  <button type="submit"  id="submit" class="btn btn-primary" name="submit">SING UP</button>
</div>
<div class="link login-link text-center">Already a member? <a href="login.php">Login here</a></div>


</form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script>
        $("#submit").click(function valide(){
            var id = $("#id").val();
            var name = $("#username").val();
            var email = $("#email").val();
            var usertype = $("#usertype").val();
            var passwd = $("#passwd").val();
            if(id =='' || name == '' || email == '' || usertype =='' || passwd == ''){
                alert("Veillez entrer les donner!!");
        }
        else{
            alert("USER AJOUTER SUCCEES");
        }



        });


        </script>
</body>
</html>
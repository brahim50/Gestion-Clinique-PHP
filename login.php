
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center
     align-items-center"
     style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" method="post" action="check-login.php">
    <h1 class="text-center p-3">LOGIN</h1>
    <img style="width: 80px; margin-left:160px;" src="logo.png" >
    <?php if(isset($_GET['error'])){    ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
  
    </div>
           <?php  }  ?>
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
  <button type="submit"  id="submit" class="btn btn-primary" name="submit">LOGIN</button>
</div>
    </form>
    </div>
    <footer style="background-color: black;height: 50px;">
    <a href="loginAdmin.php" style="position:absolute;margin-top: 8px;margin-left: 1180px;text-decoration: none;">Admin</a>

    </footer>
</body>
</html>


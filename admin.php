<?php
require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
$sql = "SELECT Count(*) FROM medecin";
$query = mysqli_query($db,$sql);
$array = mysqli_fetch_row($query);


$sqli = "SELECT Count(*) FROM patient";
$queryi = mysqli_query($db,$sqli);
$arrayi = mysqli_fetch_row($queryi);

$sqla = "SELECT Count(*) FROM rendezvous";
$querya = mysqli_query($db,$sqla);
$arraya = mysqli_fetch_row($querya);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link rel="stylesheet" href="style2.css" >
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand"> 
        <img style="border-radius: 50px;left:60px;position:absolute;" src="CV.jpg" width="80px" height="80px" >
        
        </div>
        <h5 style="color: #fff;margin-top:8px;">Super Admin BRAHIM BOUKAR</h5>
        <div class="sidebar-menu">
            <ul>
                <li>
                <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashbord</span>
                </a>
                </li>
                <li>
                <a href="deco.php" ><i class="las la-sign-out-alt"></i>
                    <span>LOGOUT</span>
                </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
    <div class="cart">
                <div class="card-single">
                    <div>
                        <h1><?php echo $array[0]; ?></h1>
                        <span>Doctor</span>
                    </div>
                    <div>
                    <i class="las la-user-nurse"></i>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo  $arrayi[0]; ?></h1>  
                        <span>Patient</span>
                    </div>
                    <div>
                    <i class="las la-user-injured"></i>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo  $arraya[0]; ?></h1>
                        <span>Rendez-vous</span>   
                    </div>
                    <div>
                    <i class="lar la-calendar"></i>
                    </div>
                </div>
            </div>
            <h2 style="margin-left: 370px;color:#DD2F6E;margin-top:9px;">LISTE OF DOCTOR</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>DOCTOR NAME</td>
                                        <td>EMAIL</td>
                                        <td>Spécialité</td>
                                        <td>région/ville</td>
                                        <td>tele</td>
                                        <td>tarif</td>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                <?php  
                $query ="SELECT *FROM medecin ";
                $res = mysqli_query($db,$query);
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
                        <td><a href="deleteM.php?ida=<?php echo $row['id'];?>" class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash" style="margin-right: 6px;"></i>SUPPRIMER</a></td>
                    </tr>
                    <?php $_SESSION['id']=$row['id'];};  ?>
</tbody>

                            </table>
                        </div>
                        <h3 style="margin-left: 370px;color:#DD2F6E;">LISTE OF PATIENT</h3>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                    <tr class="info">
                        <th>ID</th>
                        <th>PATIENT NAME</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Phone</th>
                        <th>Ville</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                 if(isset($_GET['id'])){
                   $idp=$_GET['id'];
                 }
                $query ="SELECT *FROM patient";
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
                        <td><a href="deleteP.php?ida=<?php echo $row['idP'];?>" class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash" style="margin-right: 6px;"></i>SUPPRIMER</a></td>
                    </tr>
                    <?php $_SESSION['id']=$row['idP']; };  ?>
                    </tbody>

                            </table>
                        </div>
                        <h2 style="margin-left: 370px;color:#DD2F6E;">LISTE OF USER</h2>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>USER NAME</td>
                                        <td>USER EMAIL</td>
                                        <td>USER TYPE</td>
                                        <td>PASSWD</td>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                <?php  
                $query ="SELECT *FROM user";
                $res = mysqli_query($db,$query);
               while($row = $res->fetch_assoc()){
                ?>
                <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['usertype'];?></td>
                        <td><?php echo $row['passwd'];?></td>
                        <td><a href="deleteU.php?ida=<?php echo $row['id'];?>" class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash" style="margin-right: 6px;"></i>SUPPRIMER</a></td>
                    </tr>
                    <?php $_SESSION['id']=$row['id'];};  ?>
</tbody>
                            </table>
                        </div>
    </div>
</body>
</html>
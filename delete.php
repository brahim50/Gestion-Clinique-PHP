<?php
session_start();
$id = $_SESSION['id'];
require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
if(isset($_GET['ida'])){
$ida = htmlentities($_GET['ida']);
$query = "DELETE FROM drcreneaux WHERE IDM = '$ida'";
if(mysqli_query($db,$query)){
    $msg = "<script>
    alert('supprimer succes');
    </script>";
    echo $msg;
    header("location:dash.php?id=$id");

}else{
    echo '<div class="alert alert-danger">Une erreur est survenue'.mysqli_error($db).'</div>';
}
}



?>
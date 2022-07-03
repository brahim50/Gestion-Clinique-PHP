<?php
session_start();
$id=$_POST['id'];
$username=$_POST['username'];
$passwd=$_POST['passwd'];
$usertype = $_POST['usertype'];

$id=stripslashes($id);
$username=stripslashes($username);
$usertype=stripslashes($usertype);
$passwd=stripslashes($passwd);

require('constant.php');
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);

$sql ="SELECT *FROM user WHERE id='$id' AND username='$username'
AND usertype='$usertype' AND passwd='$passwd'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
if($row['id']==$id && $row['username']==$username 
&& $row['usertype']==$usertype && $row['passwd']==$passwd  ){
    if($row['usertype']=='doctor'){
        $_SESSION['username']=$row['username'];
        $_SESSION['id']=$row['id'];
        header("location:medecin.php?id=$id");
    }
    else{
        $_SESSION['username']=$row['username'];
        $_SESSION['id']=$row['id'];
        header("location:patient.php?id=$id");
    }
}
else{
   echo'les donner incorect';
}








?>
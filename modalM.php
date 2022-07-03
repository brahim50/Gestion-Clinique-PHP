<?php 
	session_start();
    require('constant.php');
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Créneaux DR</title>
</head>
<body>
    <!-- afichage data doctor -->
    <table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="text-center">Day</th>
						<th class="text-center">Schedule</th>
                        <th class="text-center">DUREE CONSULTATION</th>
                        <th class="text-center">JOURS NON DISPONIBLE</th>
                        <th class="text-center">DOCTOR REMPLACENT</th>
                        <th class="text-center">DOCTOR REMPLACENT DAY</th>
                        <th class="text-center">DOCTOR REMPLACENT Start Time</th>
                        <th class="text-center">DOCTOR REMPLACENT END Time </th>
                        <th class="text-center">DOCTOR REMPLACENT DUREE CONSULTATION </th>
					</tr>
				</thead>
				<tbody>
					<?php
                    if(isset($_GET['ida'])){
                        $id = $_GET['ida'];
                    }
                    $qry = $db->query("SELECT *FROM drcreneaux WHERE id=$id; ");
                     while($row=$qry->fetch_assoc()): ?>
					<tr>
						<th class="text-center"><?php echo $row['day'] ?></th>
						<th class="text-center"><?php echo $row['startime'].' - '.$row['endtime'] ?></th>
                        <th class="text-center"><?php echo $row['dureeC'] ?></th>
                        <th class="text-center"><?php echo $row['joursND'] ?></th>
                        <td class="text-center"> <?php echo $row['dr'];?></td>
                        <td class="text-center"><?php echo $row['drday'];?></td>
                        <td class="text-center"><?php echo $row['drstartime'];?></td>
                        <td class="text-center"><?php echo $row['drendtime'];?></td>
                        <td class="text-center"><?php echo $row['drduree'];?></td>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
        <!-- END afichage data doctor -->
</body>
</html>
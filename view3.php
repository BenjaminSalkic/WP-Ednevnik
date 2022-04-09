<?php 
	include "config.php";
	$sql = "SELECT * FROM ucenik WHERE Razred=3;";
	$result = $konekcija->query($sql);
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
  tr:hover {
     background: grey;
	}
	td a {
	  display: block;
	  }
</style>
</head>

<body>
    <div class="container">
        <h2>Ucenici</h2>
    <table class="table">
    <thead>
        <tr>
            <th>Razred</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Vladanje</th>
            
       </tr>
    </thead>
    <tbody> 

        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>
                    <td><a href=""><?php echo $row['Razred']; ?></a></td>
                    <td><a href=""><?php echo $row['Ime']; ?></a></td>
                    <td><a href=""><?php echo $row['Prezime'];?></a></td>
                    <td><a href=""><?php echo $row['Vladanje'];?></a></td>
                    </tr>                       

        <?php       }

            }

        ?>               

    </tbody>
</table>
    </div> 
</body>
</html>
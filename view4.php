<?php 
	include "config.php";
	$sql = "SELECT * FROM ucenik WHERE Razred=4;";
	$result = $konekcija->query($sql);
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        body{
            justify-content: center;
            text-align: center;
            background-color: #818181;
        }
  tr:hover {
     background: grey;
	}
	td a {
	  display: block;
	  }
      .container{
          background-color: rgb(167, 167, 167);
          border-radius: 30px;
      }
</style>
</head>

<body>
    <div class="container">
        <h2>Ucenici IV Razreda</h2>
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
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['Id']; ?>">Ocjena</a>  <a class="btn btn-info" href="delete.php?id=<?php echo $row['Id']; ?>">Odsustvo</a></td>
                    </tr>                       

        <?php       }

            }

        ?>               

    </tbody>
</table>
    </div> 
    <a class="btn btn-danger">Nazad</a>
</body>
</html>
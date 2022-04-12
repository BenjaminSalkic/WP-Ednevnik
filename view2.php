<?php 
	include "config.php";
	$sql = "SELECT * FROM ucenik WHERE Razred=2;";
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
    thead tr:hover:first-child{
        background:rgb(167, 167, 167);
    }
  tr:hover {
     background: silver;
	}
	td a {
	  display: block;
	  }
      .container{
          background-color: rgb(167, 167, 167);
          height: 100vh;
      }
      h2{
          padding-bottom: 50px;
      }
</style>
</head>

<body>
    <div class="container">
        <h2>Ucenici II Razreda</h2>
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
                    <td><a class="btn btn-info" href="Docjena.php?id=<?php echo $row['Id']; ?>">Ocjena</a>  <a class="btn btn-info" href="Dodsustvo.php?id=<?php echo $row['Id']; ?>">Odsustvo</a><a class="btn btn-info" href="Prikaz2.php?id=<?php echo $row['Id']; ?>">Prikaz</a></td>
                    </tr>                       

        <?php       }

            }

        ?>               

    </tbody>
</table>
        <a class="btn btn-danger" href="index.html">Nazad</a>
    </div> 
    
</body>
</html>
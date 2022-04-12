<?php 
	include "config.php";
    if (isset($_GET['id'])) {
    $id = $_GET['id']; 
	$sql = "SELECT * FROM ocjene WHERE Id=$id";
	$result = $konekcija->query($sql);

    $sql1 = "SELECT * FROM odsustva WHERE Id=$id;";
	$result1 = $konekcija->query($sql1);

    $sql2 = "SELECT * FROM ucenik WHERE Id=$id;";
	$result2 = $konekcija->query($sql2);
    }
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
<?php
            if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {
        ?>
    <div class="container">
        <h2>Podatci o uceniku:<?php echo $row2['Ime'];  echo $row2['Prezime']; ?></h2>
    <table class="table">
    <thead>
        <tr>
            <th>Predmet</th>
            <th>Ocjena</th>
            
       </tr>
    </thead>
    <tbody> 

        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>
                    <td><a href=""><?php echo $row['Predmet']; ?></a></td>
                    <td><a href=""><?php echo $row['Ocjena']; ?></a></td>
                    </tr>                       

        <?php       }

            }
?>
            </tbody>
            </table>
            <table class="table">
            <thead>
            <tr>
            <th>Broj Odsustva</th>
            <th>Datum</th>
            
                </tr>
                </thead>
                <tbody>
            <?php
            if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) {
        ?>
           

                    <tr>
                    <td><a href=""><?php echo $row1['BrOds']; ?></a></td>
                    <td><a href=""><?php echo $row1['Datum']; ?></a></td>
                    </tr>                       

        <?php       }

            }

        ?>                   

    </tbody>
</table>
<h1>Vladanje:<?php echo $row2['Vladanje']; ?></h1>
        <a class="btn btn-danger" href="view.php">Nazad</a>
    </div> 
    
</body>

<?php       }

}
?>
</html>
<?php 
	include "config.php";
	$sql = "SELECT * FROM odsustva WHERE Id=123456;";
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
        <h2>Odsustva</h2>
    <table class="table">
    <thead>
        <tr>
            <th>Broj Odsustva</th>
            <th>Datum</th>
            
            
       </tr>
    </thead>
    <tbody> 

        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>
                    <td><a href=""><?php echo $row['BrOds']; ?></a></td>
                    <td><a href=""><?php echo $row['Datum']; ?></a></td>
                    </tr>                       

        <?php       }

            }

        ?>               

    </tbody>
</table>
        <a class="btn btn-danger" href="indexUser.html">Nazad</a>
    </div> 
    
</body>
</html>
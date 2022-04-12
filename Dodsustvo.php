<?php 

include "config.php";

    if (isset($_POST['Odustan'])) {
        $datum = $_POST['Datum'];
        $brods = $_POST['BrOds'];
        $id=$_GET['id']; 

        $sql = "INSERT INTO `odsustva`(`Id`, `BrOds`, `Datum`) VALUES ('$id','$brods','$datum')"; 
        $result = $konekcija->query($sql); 

        if ($result == TRUE) {

            echo "Odustva Dodana";

        }else{

            echo "Error:" . $sql . "<br>" . $konekcija->error;

        }

    } 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `odsustva` WHERE `Id`='$id'";
    $result = $konekcija->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $datum = $row['Datum'];
            $brods = $row['BrOds'];

        } 

    ?>



<body style="background: gray;">
<div style="background: silver;">
<h2>Dodaj Odsustvo</h2>
<form action="" method="POST">
  <fieldset>
      Datum:
      <input type="date" name="Datum">
   <br>
    Broj Odsustva:<br>
    <input type="radio" name="BrOds" value="1">1
    <input type="radio" name="BrOds" value="2">2
    <input type="radio" name="BrOds" value="3">3
    <input type="radio" name="BrOds" value="4">4
    <input type="radio" name="BrOds" value="5">5
    <input type="radio" name="BrOds" value="6">6
    <input type="radio" name="BrOds" value="7">7
   
    <br><br>
    <input type="submit" name="Odustan" value="Dodaj">
  </fieldset>

</form>
</div>
</body>
<?php
    } else{ 

        header('Location: login.php');

    } 

}
//
?> 
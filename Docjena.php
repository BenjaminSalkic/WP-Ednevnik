<?php 

include "config.php";

    if (isset($_POST['dodaj'])) {
        $predmet = $_POST['Predmet'];
        $ocjena = $_POST['Ocjena'];
        $id=$_GET['id']; 

        $sql = "INSERT INTO `ocjene`(`Id`, `Predmet`, `Ocjena`) VALUES ('$id','$predmet','$ocjena')"; 
        $result = $konekcija->query($sql); 

        if ($result == TRUE) {

            echo "Ocjena Dodana";

        }else{

            echo "Error:" . $sql . "<br>" . $konekcija->error;

        }

    } 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `ocjene` WHERE `Id`='$id'";
    $result = $konekcija->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $ocjena = $row['Ocjena'];
            $predmet = $row['Predmet'];

        } 

    ?>



<body style="background: gray;">
<div style="background: silver;">
<h2>Dodaj ocjenu</h2>
<form action="" method="POST">
  <fieldset>
      Predmet:
   <select name="Predmet" id="">
       <option value="BAZE PODATAKA">Baze Podataka</option>
       <option value="BOSANSKI JEZIK">Bosanski Jezik</option>
       <option value="DEMOKRATIJA">Demokratija</option>
       <option value="ENGLESKI JEZIK">Engleski Jezik</option>
       <option value="FILOZOFIJA">Filozofija</option>
       <option value="INFORMATIKA">Informatika</option>
       <option value="LATINSKI JEZIK">Latinski Jezik</option>
       <option value="LIKOVNA KULTURA">Likovna Kultura</option>
       <option value="MATEMATIKA">Matematika</option>
       <option value="MUZICKA KULTURA">Muzicka Kultura</option>
       <option value="NJEMACKI JEZIK">Njemacki Jezik</option>
       <option value="PROGRAMIRANJE">Programiranje</option>
       <option value="TJELESNI ODGOJ">Tjelesni Odgoj</option>
       <option value="VJERONAUKA">Vjeronauka</option>
       <option value="WEB PROGRAMIRANJE">Web Programiranje</option>
   </select>
   <br>
    Ocjena:<br>
    <input type="radio" name="Ocjena" value="1">1
    <input type="radio" name="Ocjena" value="2">2
    <input type="radio" name="Ocjena" value="3">3
    <input type="radio" name="Ocjena" value="4">4
    <input type="radio" name="Ocjena" value="5">5
   
    <br><br>
    <input type="submit" name="dodaj" value="Unesi">
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
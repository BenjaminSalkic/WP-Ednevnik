<?php 
	include "config.php";
	$sql = "SELECT * FROM user;";
	$result = $konekcija->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
body {
    background-color: #818181;
    font-family: Arial, Helvetica, sans-serif;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar" height="700px">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="Name" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"id="Pass" >
        
    <button onclick="TakeName()">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

    <script>
        let a;
        let b;
        let UserName;
        let PassWord;
        let Provjera;
        let Name;

        function TakeName(){
            Provjera=0;
            a=document.getElementById("Name").value;
            b=document.getElementById("Pass").value;  
            check();      
        }

        function check(){
            <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            $user=$row['Username'];
            $pass=$row['Password']; 
            ?>

            UserName='<?php echo $user; ?>';
            PassWord='<?php echo $pass; ?>';
            
            if(a==UserName && b==PassWord){
                Provjera++;
                Name=UserName;
            }
    
        <?php
             }
            }
        ?>
        if(Provjera!=0 && Name=='Admin'){

            alert('Login succ');
            window.location.href = 'index.html';

        }
        else if(Provjera!=0 && Name=='User'){

            alert('Login succ');
            window.location.href = 'indexUser.html';
        }
        else{

            alert('Login failed');
        }
        }
    </script>
</body>
</html>
<?php
session_start();
require ("connection.php");

if(isset($_POST['submit'])){
  header('location:connexion.php');
  $email = $_POST["Email"];
  $sql = "SELECT Email FROM client WHERE Email ='$email'";
  $result= mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){
    echo "Cet compte est existe ";
  } else
       {
        $nom = $_POST["Nom"];
        $prenom = $_POST["Prenom"];
        $adresse = $_POST["Adresse"];
        $number = $_POST["Telephone"];
        $email = $_POST["Email"];
        $password = sha1($_POST["Motdepasse"]);

       $detailClient = "INSERT INTO client (Nom, Prenom, Adresse, Telephone, Email, Motdepasse)
            VALUES ( '$nom','$prenom','$adresse','$number','$email','$password');";
            mysqli_query($db,$detailClient);
              
       }} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link href="inscription.css" rel="stylesheet">
    <title>Document</title>
</head>
 
<body>
    <div class="littlelogin">
      <a href="home.php"><img class="logo" src="neon logo a.png"></a>
        <div class="leftside">
        <h1>Inscrivez-vous</h1>
        <form method="POST" action="">
        <input type ="text" name="Nom" class="email" placeholder="Nom" required><br>
        <input type ="text" name="Prenom" class="email" placeholder="Prenom" required><br>
        <input type ="email" name="Email" class="email" placeholder="Adresse E-mail" required><br>
        <input type ="text" name="Adresse" class="password" placeholder="Adresse" required><br>
        <input type ="tel" name="Telephone" class="email" placeholder="Numero de tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
        <input type ="password" name="Motdepasse" class="password" placeholder="Mot de passe" required><br>
       <button class="a" type="submit" name="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        S'inscrire
      </button>
        <p class="p">J'ai un compte ?<a href="connexion.php"  id="connexion"><strong >&nbsp Connecter</strong></a></p>
   
    </div>
    <div class="rightside">
  
    </div>

</body>


      <!--<form method="POST" action="inscription.php">
  <div class="form-row">
    <div class="col">
    <label for="inputFirstname">first name</label>
      <input type="text" name="Nom" class="form-control" placeholder="First name">
    </div>
    <div class="col">
    <label for="inputLastname">last name</label>
      <input type="text" name="Prenom" class="form-control" placeholder="Last name">
    </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4">Email</label>
      <input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col">
      <label for="inputPassword4">Mot de passe</label>
      <input type="password" name="Motdepasse" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAdresse">Adresse</label>
    <input type="text" name="Adresse" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
  <label for="inputTelephone">Telephone</label>
      <input type="number" name="Telephone" class="form-control" placeholder="Telephone">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button name="submit" type="submit" class="btn btn-primary">S'inscrire</button>
</form>
</html>
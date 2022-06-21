<?php include('connection.php');
$Id_produit =$_GET['id'];
$selectData="SELECT * FROM produit p 
INNER JOIN size S ON P.Id_produit = S.Id_produit";
$rel = mysqli_query($db,$selectData);
if($rel -> num_rows>0){?>
<?php include "navbar.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detailproduit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="detailproduit.css" rel="stylesheet">
</head>
<body>

<main>


       <?php

    $rows = array();

    while($row =$rel -> fetch_assoc()){
      $rows[] = $row;
    }
          echo'   
          <div class="bigdiv shadow-lg ">
          <div class="leftdiv"><img class="boot"src="image/'.$rows[0]["Url_Image"].'">
             </div>
             <form>
        <div class="rightdiv">
            <h2 >'.$rows[0]["Libelle"].'</h2>
            <p>'.$rows[0]["Description"].'</p>
            <h5>
            <label for="couleur">Choisir votre couleur:</label>

<select name="Couleur" id="couleur">
  <option value="blanc">Blanc</option>
  <option value="rouge">Rouge</option>
  <option value="jaune">Jaune</option>
  <option value="vert">Vert</option>
</select>
            </h5>
            <h5 class="libelleProduit txt">'.$rows[0]["nomsize"].' '.$rows[0]["nomsize2"].' '.$rows[0]["nomsize3"].' </h5>
            <div>         
        
          <div>
      <h5 class="quantite txt">Select QUANTITE</h5>
        <div class="wrapper">
          <span class="minus">-</span>
          <span class="num">01</span>
          <span class="plus">+</span>
        </div>
  
        <a class="a" href="checkout.php?idproduit='.$rows[0]["Id_produit"].'">
        <input type="submit" value="Acheter maintenant" style="color:#fff;border:none;background:none">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  
</a>  
              ';
      
    }
    
      ?>



             

    </div>
  </div>
</div>
</div>
</main>
    <script>
        const plus = document.querySelector(".plus"),
         minus = document.querySelector(".minus"),
         num = document.querySelector(".num");
         let a = 1;
         plus.addEventListener("click", ()=>{
           a++;
           a = (a < 10) ? "0" + a : a;
           num.innerText = a;
         });

         minus.addEventListener("click", ()=>{
           if(a > 1){
             a--;
             a = (a < 10) ? "0" + a : a;
             num.innerText = a;
           }
         });

       </script> 
       <!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
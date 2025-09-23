<!DOCTYPE html>
<html lang="hr">
<head>
<title>IWA Projekt</title>
<head>
<meta charset="UTF-8">
<meta name="description" content="Projekt na temu Glazbeni katalog">
<meta name="keywords" content="IWA, Projekt, Glazbeni katalog ">
<meta name="author" content="Petra Jakopović">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stil.css" rel="stylesheet" type="text/css">
 </head>
  <body>
 <div id="glavni">
     
<nav>
 <div id="lijevo">
   <a href="index.php"><b>IWA Projekti</b></a> 
</div>  
<a href="odjava.php">     
<?php 

     if($user_data)
     {
         echo "Odjavite se";
     } else 
     {
         echo "Prijavite se";
     }
?>
</a> 
<a href="o_autoru.html">O autoru</a>
<?php
     if(isset($user_data['tip_korisnika_id']) && $user_data['tip_korisnika_id']<=2)
     {
echo "<a href='mojepjesme.php'>Moje pjesme</a>";
          }
        if(isset($user_data['tip_korisnika_id']) && $user_data['tip_korisnika_id']<=0)
 {
    echo "<a href='korisnici.php'>Moji korisnici</a>";
    echo "<a href='medijske_kuce.php'>Medijske kuće</a>";
 }
 if(isset($user_data['tip_korisnika_id']) && $user_data['tip_korisnika_id'] <=1){
   echo "<a href='ponude.php'>Ponude</a>";
 }
?>
<a href='pjesme.php'>Pjesme</a> 
<a href='index.php'>Početna</a> 
    
</nav>

<div id="logo"><a name ="sidro"></a>
</div>
<br />



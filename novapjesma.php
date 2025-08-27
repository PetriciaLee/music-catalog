<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');
?>

<div id="sadrzaj">
    <h1>Nova pjesma</h1>



<div id="sadrzaj">
<form action="skripta_spremi_pjesmu.php" method="post">
    <label for="naziv">Naziv pjesme:</label>
    <input type="text" id="naziv" name="naziv" required><br>
<br>
    <label for="poveznica">Poveznica do audio zapisa:</label>
    <input type="url" id="poveznica" name="poveznica" required><br>
<br>
    <label for="opis">Opis pjesme:</label><br>
    <textarea id="opis" name="opis" rows="4" cols="50"></textarea><br>
<br>
    <input type="submit" value="Kreiraj pjesmu">
</form>
</div>
</div>
<br /> 


<?php
include("podnozje.php");
?>


    

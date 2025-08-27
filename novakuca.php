<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');

?>

<div id="sadrzaj">
    <h1>Nova kuća</h1>


<div id="sadrzaj">
<form action="skripta_spremi_kucu.php" method="post">
    <label for="naziv_kuce">Naziv kuće:</label> 
    <input type="text" id="naziv_kuce" name="naziv_kuce" required><br> <br>

    <label for="opis">Opis kuće:</label><br>
    <textarea id="opis" name="opis" rows="4" cols="50"></textarea><br>


    <input type="submit" value="Izgradi medijsku kuću">
</form>
</div>
</div>
<br /> 


<?php
include("podnozje.php");
?>

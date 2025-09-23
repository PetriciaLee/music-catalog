<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');

    global $pjesma_id;
    $pjesma_id = $_GET['pjesma_id'];
    $con = spojiSeNaBazu();
    $query = "SELECT * FROM korisnik k, pjesma p WHERE p.pjesma_id =" . $pjesma_id . " AND p.korisnik_id = k.korisnik_id AND k.korisnik_id = ".$user_data['korisnik_id'];
    $res = mysqli_fetch_assoc(izvrsiUpit($con, $query));

?>

<div id="sadrzaj">
    <h1>Nova pjesma</h1>

<div id="sadrzaj">
<form action="skripta_azuriraj_pjesmu.php" method="post">
    <input type="hidden" name="pjesma_id" value="<?php echo $res['pjesma_id'] ?>">
    <label for="naziv">Naziv pjesme:</label>
    <input type="text" id="naziv" name="naziv" value="<?php echo $res['naziv'] ?>" required><br>
<br>
    <label for="poveznica">Poveznica do audio zapisa:</label>
    <input type="url" id="poveznica" name="poveznica" value="<?php echo $res['poveznica'] ?>" required><br>
<br>
    <label for="opis">Opis pjesme:</label> <br>
    <textarea id="opis" name="opis" rows="4" cols="50"><?php echo $res['opis'] ?></textarea><br>
<br>
    <input type="submit" value="Spremi pjesmu">
</form>
</div>
</div>
<br /> 


<?php
include("podnozje.php");
?>


    
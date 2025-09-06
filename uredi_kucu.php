<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');

    global $kuca_id;
    $kuca_id = $_GET['kuca_id'];

    $con = spojiSeNaBazu();
    $query = "SELECT * FROM medijska_kuca mk WHERE mk.medijska_kuca_id = $kuca_id";
    $res = mysqli_fetch_assoc(izvrsiUpit($con, $query));
?>

<div id="sadrzaj">
    <h1>Postojeća kuća</h1>


<div id="sadrzaj">
<form action="skripta_azuriraj_kucu.php" method="post">
    <input type="hidden" name="kuca_id" value="<?php echo $kuca_id ?>">


    <label for="naziv_kuce">Naziv kuće:</label>
    <input type="text" id="naziv_kuce" name="naziv_kuce" value="<?php echo $res["naziv"] ?>" required><br>
<br>
    <label for="opis_kuce">Opis kuće:</label> <br>
    <textarea id="opis" name="opis_kuce" rows="4" cols="50"><?php echo $res["opis"] ?></textarea><br>

    <input type="submit" value="Renoviraj">
</form>
</div>
</div>
<br /> 


<?php
include("podnozje.php");
?>


    
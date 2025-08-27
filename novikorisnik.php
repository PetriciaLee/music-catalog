<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');

?>

<div id="sadrzaj">
    <h1>Novi korisnik</h1>



<div id="sadrzaj">
<form action="skripta_spremi_korisnika.php" method="post">
    <label for="korime">Korime:</label>
    <input type="text" id="korime" name="korime" required><br>

    <label for="ime">Ime:</label>
    <input type="text" id="ime" name="ime" required><br>

    <label for="prezime">prezime:</label>
    <input type="text" id="prezime" name="prezime" required><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br>

    <label for="lozinka">Lozinka:</label>
    <input type="text" id="lozinka" name="lozinka" required><br>

    <?php
        $con = spojiSeNaBazu();
        $query = "SELECT * FROM tip_korisnika";
        $res = izvrsiUpit($con, $query);
        echo '<select name="tip_korisnika">';
        while ($row = mysqli_fetch_assoc($res)) {
          $id = $row['tip_korisnika_id'];
          $naziv = $row['naziv'];
          echo "<option value=\"$id\">$naziv</option>";
        }

        echo '</select>';
    ?>
<br><br>
    <input type="submit" value="Kreiraj korisnika">
</form>
</div>
    </div>
<br /> 


<?php
include("podnozje.php");
?>

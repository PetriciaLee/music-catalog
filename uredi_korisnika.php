<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');

    global $korisnik_id;
    $korisnik_id = $_GET['korisnik_id'];

    $con = spojiSeNaBazu();
    $query = "SELECT * FROM korisnik k WHERE k.korisnik_id = $korisnik_id";
    $res = mysqli_fetch_assoc(izvrsiUpit($con, $query));
?>


<div id="sadrzaj">
    <h1>Postojeći korisnik</h1>
<br />


<div id="sadrzaj">
<form action="skripta_azuriraj_korisnika.php" method="post">
    <input type="hidden" name="korisnik_id" value="<?php echo $korisnik_id ?>">


    <label for="korime">Korime:</label>
    <input type="text" id="korime" name="korime" value="<?php echo $res['korime'] ?>"  required><br>

    <label for="ime">Ime:</label>
    <input type="text" id="ime" name="ime" value="<?php echo $res['ime'] ?>" required><br>

    <label for="prezime">prezime:</label>
    <input type="text" id="prezime" name="prezime" value="<?php echo $res['prezime'] ?>" required><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo $res['email'] ?>" required><br>

    <label for="lozinka">Lozinka:</label>
    <input type="text" id="lozinka" name="lozinka" value="<?php echo $res['lozinka'] ?>" required><br>

    <?php
        $query = "SELECT * FROM tip_korisnika";
        $res_tip = izvrsiUpit($con, $query);
        echo '<select name="tip_korisnika">';
        while ($row = mysqli_fetch_assoc($res_tip)) {
            $id = $row['tip_korisnika_id'];
            $naziv = $row['naziv'];
            $selected = ($id == $res["tip_korisnika_id"]) ? 'selected' : '';

            echo "<option value=\"$id\" $selected>$naziv</option>";
        }
        echo '</select><br>';

        if($res["tip_korisnika_id"] < 2){
            $query = "SELECT * FROM medijska_kuca";
            $res_kuce = izvrsiUpit($con, $query);
            echo '<select name="mod_za">';
            echo "<option value=\"NULL\">----</option>";
            while ($row = mysqli_fetch_assoc($res_kuce)) {
                $id = $row['medijska_kuca_id'];
                $naziv = $row['naziv'];
                $selected = ($id == $res["medijska_kuca_id"]) ? 'selected' : '';
    
                echo "<option value=\"$id\" $selected>$naziv</option>";
            }
            echo '</select><br>';
        }
    ?>
<br>
    <input type="submit" value="Spremi">
</form>
</div>
    </div>
<br /> 


<?php
include("podnozje.php");
?>


    
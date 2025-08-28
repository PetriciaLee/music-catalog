<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');

    global $pjesma_id;
    $pjesma_id = $_GET['pjesma_id'];
?>

<div id="sadrzaj">
    <h1>Pjesma detalji</h1>

<div id="sadrzaj">
<?php
         $con = spojiSeNaBazu();

         $query = "SELECT *, mk.naziv AS naziv_kuce FROM korisnik k, pjesma p, medijska_kuca mk WHERE p.korisnik_id = k.korisnik_id AND k.korisnik_id = p.korisnik_id AND (p.medijska_kuca_id = mk.medijska_kuca_id OR p.medijska_kuca_id IS NULL) AND p.pjesma_id = ".$pjesma_id ." ORDER BY p.broj_svidanja DESC";
 
         $res = mysqli_fetch_assoc(izvrsiUpit($con, $query));
         echo '<h2>'.$res['naziv'].'</h2>';
         echo 'Datum i vrijeme kreiranja: ' . htmlspecialchars(formatiraj_datum($res["datum_vrijeme_kreiranja"])) . '<br>';
         echo 'Broj sviđanja: ' . htmlspecialchars($res["broj_svidanja"]) . '<br>';
         echo 'Opis pjesme: ' . htmlspecialchars($res["opis"]) . '<br>';
         echo 'Kreirao korisnik: ' . htmlspecialchars($res["ime"] . " ". $res["prezime"]). '<br>';
         if(!empty($res["datum_vrijeme_kupnje"])){
             echo 'Datum i vrijeme kupnje: ' . htmlspecialchars(formatiraj_datum($res["datum_vrijeme_kupnje"])) . '<br>';
             echo 'Vlasnik medijska kuća: ' . htmlspecialchars($res["naziv_kuce"]) . '<br>';
         }
         echo "<form method=\"GET\" action=\"skripta_lajkaj_pjesmu.php\">".
         "<input type=\"hidden\" name=\"pjesma_id\" value=\"".$res['pjesma_id']."\"/>" .
         "<input type=\"hidden\" name=\"header\" value=\"pjesma_detalj.php?pjesma_id=".$pjesma_id."\"/>" .
         "<input type=\"submit\" value=\"Sviđa mi se ova pjesma i želim pridonijeti statistici\" />".
     "</form>";


    ?>
</div>
    </div>
<br /> 


<?php
include("podnozje.php");
?>


    
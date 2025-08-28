<?php
    include('predglavlje.php');
    include('zaglavlje.php');
?>

<div id="sadrzaj">
    <h1>Glazbeni katalog </h1>

     </div> 



<div id="sadrzaj">
<pre>Lista pjesama</pre>
    <ul>
        <?php
        

        $con = spojiSeNaBazu();
        $query = "SELECT * FROM medijska_kuca WHERE 1";
        $res = izvrsiUpit($con,$query);
      
        echo '<form action="pjesme.php" method="post">';

        echo '<select name="medijska_kuca">';
        while ($row = mysqli_fetch_assoc($res)) {
          $id = $row['medijska_kuca_id'];
          $naziv = $row['naziv'];
          echo "<option value=\"$id\">$naziv</option>";
        }

        echo '</select>';
        ?>
         <label for="dateFrom">Od:</label>
        <input type="text" id="dateFrom" name="dateFrom" placeholder="12.8.2021 11:29:00">

        <label for="dateTo">Do:</label>
        <input type="text" id="dateTo" name="dateTo" placeholder="12.8.2021 11:29:00">
        <?php
        echo '<input type="submit" value="Primijeni">';
        echo '</form>';
        $query = "SELECT * FROM korisnik k, pjesma p WHERE p.korisnik_id = k.korisnik_id AND (".
    (isset($_POST['dateFrom']) && !empty($_POST['dateFrom']) ? "p.datum_vrijeme_kreiranja >= '". formatiraj_datum_sql($_POST['dateFrom']) . "'" : "1=1") .
    ") AND (".
    (isset($_POST['dateTo']) && !empty($_POST['dateTo']) ? "p.datum_vrijeme_kreiranja <= '". formatiraj_datum_sql($_POST['dateTo']) . "'" : "1=1") .
    ") AND (".
    (isset($_POST['medijska_kuca']) && !empty($_POST['medijska_kuca']) ? "p.medijska_kuca_id = ".$_POST['medijska_kuca'] : "1=1") .
    ") ORDER BY p.broj_svidanja DESC";

    $res = izvrsiUpit($con,$query);
        while ($red = mysqli_fetch_assoc($res)) {
            echo '<li>';
            if (isset($red["poveznica"]) && is_string($red["poveznica"])) {
                echo '<audio src="' . htmlspecialchars($red["poveznica"]) . '" controls></audio>';
            } else {
                echo 'Nema dostupne poveznice za audio zapis.';
            }

            echo 'Korisnik: ' . htmlspecialchars($red["korime"]) . '<br>';
            echo 'Broj sviđanja: ' . htmlspecialchars($red["broj_svidanja"]) . '<br>';
            if(isset($user_data) && $user_data['medijska_kuca_id'] != null){
                $query = "SELECT * FROM pjesma p WHERE p.pjesma_id =". $red['pjesma_id'] . " AND p.medijska_kuca_id = ". $user_data['medijska_kuca_id'] . " LIMIT 1";
                $res_kupnja = izvrsiUpit($con, $query);
            }

            if(isset($user_data) && $red["medijska_kuca_id"] == null && $user_data["tip_korisnika_id"] < 2 && isset($res_kupnja) && mysqli_num_rows($res_kupnja) === 0){
                echo '<span style="color: green;">Naziv pjesme:</span> <a href="pjesma_detalj.php?pjesma_id='.$red['pjesma_id'].'">' . htmlspecialchars($red["naziv"]) . '<a/><br>';
                echo '<form method="GET" action="skripta_ponudi.php">
                <input type="hidden" name="pjesma_id" value="'.$red['pjesma_id'].'"/>
                <input type="hidden" name="kuca_id" value="'.$user_data['medijska_kuca_id'].'"/>
                <input type="hidden" name="header" value="pjesme.php"/>
                Zatraži kupnju:
                <input type="submit" value="Pošalji ponudu" />
                </form>';

            } else{
                echo 'Naziv pjesme: <a href="pjesma_detalj.php?pjesma_id='.$red['pjesma_id'].'">' . htmlspecialchars($red["naziv"]) . '<a/><br>';

            }
            echo '</li>';
        }
        zatvoriVezuNaBazu($con);
        ?>             
</ul>  
<a href="#sidro"><img src="slike/gumb.png" alt="Top" width="5%" align="right"/></a><br><br><br>

</div>
<br /> 


<?php
include("podnozje.php");
?>
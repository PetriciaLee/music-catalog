<?php
    include('predglavlje.php');
    include('zaglavlje.php');
?>
<div id="sadrzaj">
    <h1>Glazbeni katalog </h1>

</div> 

<div id="sadrzaj">
<pre>Lista kupljenih pjesama sortiranih po broju sviđanja</pre>
    <ul>
    <?php
        $query = "SELECT * FROM korisnik k, pjesma p WHERE p.korisnik_id = k.korisnik_id AND p.medijska_kuca_id IS NOT NULL ORDER BY p.broj_svidanja DESC";
        $con = spojiSeNaBazu();
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
            echo 'Naziv pjesme: ' . htmlspecialchars($red["naziv"]) . '<br>';
            echo '</li>';
        }
        zatvoriVezuNaBazu($con);
        ?>                   
</ul>  
<br>
<a href="#sidro"><img src="slike/gumb.png" alt="Top" width="5%" align="right"/></a><br><br><br>

</div>
<br /> 

<?php
include("podnozje.php");
?>

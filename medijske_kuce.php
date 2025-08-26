<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');
?>

<div id="sadrzaj">
    <h1>Moje medijske kuće</h1>


<div id="sadrzaj">
<a href="novakuca.php">Nova medijska kuća</a>
<pre>Lista mojih kuća</pre>
    <ul>
        <?php
        $query = "SELECT * FROM medijska_kuca";
        $con = spojiSeNaBazu();
        $res = izvrsiUpit($con,$query);
        while ($red = mysqli_fetch_assoc($res)) {
            $query = "SELECT sum(pjesma.broj_svidanja) as svidanja FROM medijska_kuca, pjesma WHERE pjesma.medijska_kuca_id = medijska_kuca.medijska_kuca_id AND medijska_kuca.medijska_kuca_id = " .$red['medijska_kuca_id'];
            $br_sv = mysqli_fetch_assoc(izvrsiUpit($con, $query));
            echo '<li>';
            echo '<a href="uredi_kucu.php?kuca_id='.$red["medijska_kuca_id"].'">ID: ' . $red["medijska_kuca_id"] . " Naziv: " . $red["naziv"]. "</a> ";
            echo 'Broj sviđanja: ' . $br_sv["svidanja"]; 
            echo '</li>';
        }
        zatvoriVezuNaBazu($con);
        ?>             
</ul>     
</div>
    </div>
<br /> 


<?php
include("podnozje.php");
?>

<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');
?>

<div id="sadrzaj">
    <h1>Moji korisnici</h1>


<div id="sadrzaj">
<a href="novikorisnik.php">Novi korisnik</a>
<pre>Lista mojih korisnika</pre>
    <ul>
        <?php
        $query = "SELECT * FROM korisnik";
        $con = spojiSeNaBazu();
        $res = izvrsiUpit($con,$query);
        while ($red = mysqli_fetch_assoc($res)) {

            echo '<li>';
            echo '<a href="uredi_korisnika.php?korisnik_id='.$red["korisnik_id"].'">ID: ' . $red["korisnik_id"] . " Ime: " . $red["ime"]. " " . $red["prezime"] . " Korime: " . $red["korime"] . " Email: " . $red["email"] . "</>"; 
            echo '</li>';
        }
        zatvoriVezuNaBazu($con);
        ?>             
</ul>     
</div>
<a href="#sidro"><img src="slike/gumb.png" alt="Top" width="5%" align="right"/></a><br><br><br>

    </div>
<br /> 

<?php
include("podnozje.php");
?>


    

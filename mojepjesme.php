<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');
?>

<div id="sadrzaj">
    <h1>Moje pjesme</h1>


<div id="sadrzaj">
<a href="novapjesma.php">Nova pjesma</a>
<pre>Lista mojih kreiranih pjesama</pre>
    <ul>
        <?php
        $query = "SELECT DISTINCT p.*, k.*, p.medijska_kuca_id AS mkid
        FROM korisnik k
        LEFT JOIN pjesma p ON k.korisnik_id = p.korisnik_id
        LEFT JOIN medijska_kuca mk ON p.medijska_kuca_id = mk.medijska_kuca_id
        WHERE p.korisnik_id = ".$_SESSION['user_id']."
        AND (p.medijska_kuca_id = mk.medijska_kuca_id OR p.medijska_kuca_id IS NULL)
        ORDER BY p.broj_svidanja DESC";


        $con = spojiSeNaBazu();
        $res = izvrsiUpit($con,$query);
        while ($red = mysqli_fetch_assoc($res)) {

            $html_kupnja = '';
            $query = "SELECT *, mk.naziv AS naziv_kuce FROM pjesma p, medijska_kuca mk WHERE p.pjesma_id = " . $red['pjesma_id'] . " AND p.medijska_kuca_id = mk.medijska_kuca_id AND p.datum_vrijeme_kupnje IS NULL";
            $res_kupnja = izvrsiUpit($con, $query);
            if(mysqli_num_rows($res_kupnja) > 0){
                $html_kupnja = "<ul>";
                
                while($red_kupnja = mysqli_fetch_assoc($res_kupnja)){
                    $prihvati_ponudu = "skripta_prihvati_ponudu.php";
                    $odbij_ponudu = "skripta_odbij_ponudu.php";
                    $html_kupnja .= '<li>';
                    $html_kupnja .= "Medijska kuća: " . $red_kupnja['naziv_kuce'];
                    $html_kupnja .= "<form method=\"GET\" action=\"".$prihvati_ponudu ."\">".
                        "<input type=\"hidden\" name=\"pjesma_id\" value=\"".$red['pjesma_id']."\"/>" .
                        "<input type=\"hidden\" name=\"kuca_id\" value=\"".$red_kupnja['medijska_kuca_id']."\"/>" .
                        "<input type=\"hidden\" name=\"header\" value=\"mojepjesme.php\"/>" .
                        "<input type=\"submit\" value=\"Prihvati ponudu\" />".
                    "</form>";
                    $html_kupnja .= "<form method=\"GET\" action=\"".$odbij_ponudu ."\">".
                        "<input type=\"hidden\" name=\"pjesma_id\" value=\"".$red['pjesma_id']."\"/>" .
                        "<input type=\"hidden\" name=\"kuca_id\" value=\"".$red_kupnja['medijska_kuca_id']."\"/>" .
                        "<input type=\"hidden\" name=\"header\" value=\"mojepjesme.php\"/>" .
                        "<input type=\"submit\" value=\"Odbij ponudu\" />".
                    "</form>";
                    $html_kupnja .= '</li>';
                }

                $html_kupnja .= "</ul>";
            }


            echo '<li>';
            if (isset($red["poveznica"]) && is_string($red["poveznica"])) {
                echo '<audio src="' . htmlspecialchars($red["poveznica"]) . '" controls></audio>';
            } else {
                echo 'Nema dostupne poveznice za audio zapis.';
            }
            echo 'Korisnik: ' . htmlspecialchars($red["korime"]) . '<br>';
            echo 'Broj sviđanja: ' . htmlspecialchars($red["broj_svidanja"]) . '<br>';
            echo 'Naziv pjesme: ' . htmlspecialchars($red["naziv"]) . '<br>';
            echo 'Opis pjesme: ' . htmlspecialchars($red["opis"]) . '<br>';
            echo 'Datum i vrijeme kreiranja: ' . htmlspecialchars(formatiraj_datum($red["datum_vrijeme_kreiranja"])) . '<br>';
            if(!empty($red["datum_vrijeme_kupnje"]) && !empty($red["mkid"])){
                $query = "SELECT naziv FROM medijska_kuca WHERE medijska_kuca_id = " . $red["mkid"];
                $res_kuca = izvrsiUpit($con, $query);
                $kuca = mysqli_fetch_assoc($res_kuca)["naziv"];
                echo 'Datum i vrijeme kupnje: ' . htmlspecialchars(formatiraj_datum($red["datum_vrijeme_kupnje"])) . '<br>';
                echo 'Vlasnik medijska kuća: ' . htmlspecialchars($kuca) . '<br>';
                echo 'Status: KUPLJENA <br>';
            } else if(strlen($html_kupnja)>10){
                echo 'Status: ZATRAŽENA KUPNJA <br>';
                echo '<a href="uredi_pjesmu.php?pjesma_id='.$red["pjesma_id"].'">Uredi pjesmu</a>';
            } else{
                echo 'Status: <b> NIJE KUPLJENA</b> <br>';
                echo '<a href="uredi_pjesmu.php?pjesma_id='.$red["pjesma_id"].'">Uredi pjesmu</a>';
            }
            
            echo $html_kupnja;
            echo '</li>';
        }
        zatvoriVezuNaBazu($con);
        ?>             
</ul>    
<a href="#sidro"><img src="slike/gumb.png" alt="Top" width="5%" align="right"/></a><br><br><br>

</div>
    </div>
<br /> 


<?php
include("podnozje.php");
?>

    
<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 1 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }
    include('zaglavlje.php');
?>

<div id="sadrzaj">
    <h1>Ponude i kupnje moje medijske kuće</h1>


<div id="sadrzaj">
<pre>Lista ponuda</pre>
    <ul>
        <?php

        if(isset($user_data['medijska_kuca_id']) && !empty($user_data['medijska_kuca_id'])){
            $query = "SELECT * FROM pjesma p WHERE p.medijska_kuca_id = " . $user_data['medijska_kuca_id'];
            $con = spojiSeNaBazu();
            $res = izvrsiUpit($con,$query);
            while ($red = mysqli_fetch_assoc($res)) {
                
                echo '<li>';
                echo 'Pjesma: ' . $red["naziv"] . '<br>';
                if($red['datum_vrijeme_kupnje'] != null && $red['medijska_kuca_id'] == $user_data['medijska_kuca_id']){
                    echo "Status: <b>KUPLJENA</b>";
                } else if($red['datum_vrijeme_kupnje'] != null && $red['medijska_kuca_id'] != $user_data['medijska_kuca_id']) {
                    echo "Status: <b>PRODANA DRUGOJ MEDIJSKOJ KUĆI</b>";
                } else if($red['medijska_kuca_id'] != null && $red['datum_vrijeme_kupnje'] == null){
                    echo "Status: <b>ČEKA ODOBRENJE</b>";
                }
                echo '</li>';
            }
            zatvoriVezuNaBazu($con);
        }
        else{
            echo '<p>Zatražite administratora da vas dodijeli medijskoj kući.</p>';
        }
        
        ?>             
</ul>     
</div>
    </div>
<br /> 


<?php
include("podnozje.php");
?>

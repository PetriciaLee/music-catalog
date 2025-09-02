<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    $pjesma_id = $_POST['pjesma_id'];

    $naziv = $_POST["naziv"];
    $opis = $_POST["opis"];
    $poveznica = $_POST["poveznica"];

    if(!empty($naziv) && !empty($opis)){
        $con = spojiSeNaBazu();
        $query = "UPDATE `pjesma` SET `naziv` = '$naziv',`poveznica` = '$poveznica',`opis` = '$opis' WHERE `pjesma_id` = $pjesma_id AND korisnik_id = " . $user_data["korisnik_id"];

        izvrsiUpit($con, $query);


        zatvoriVezuNaBazu($con);
        echo $pjesma_id;
        header("Location: uredi_pjesmu.php?pjesma_id=".$pjesma_id);
    }
?>
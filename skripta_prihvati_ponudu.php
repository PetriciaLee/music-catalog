<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    $pjesma_id = $_GET['pjesma_id'];
    $kuca_id = $_GET['kuca_id'];


    $datum_kupnje = formatiraj_datum_sql(date("d.m.Y H:i:s"));
    $con = spojiSeNaBazu();

    $query = "UPDATE pjesma SET medijska_kuca_id = " . $kuca_id . ", datum_vrijeme_kupnje = '". $datum_kupnje ."' WHERE pjesma_id = ". $pjesma_id;
    izvrsiUpit($con, $query);


    zatvoriVezuNaBazu($con);
    header("Location: " . $_GET['header']);
?>
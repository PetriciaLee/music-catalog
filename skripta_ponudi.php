<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    $pjesma_id = $_GET['pjesma_id'];
    $kuca_id = $_GET['kuca_id'];

    $con = spojiSeNaBazu();

    $query = "UPDATE pjesma SET medijska_kuca_id = $kuca_id WHERE pjesma_id = " . $pjesma_id . " AND medijska_kuca_id IS NULL";
    izvrsiUpit($con, $query);

    zatvoriVezuNaBazu($con);
    header("Location: " . $_GET['header']);
?>
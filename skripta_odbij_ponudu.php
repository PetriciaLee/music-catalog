<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    $pjesma_id = $_GET['pjesma_id'];

    $con = spojiSeNaBazu();

    $query = "UPDATE pjesma SET medijska_kuca_id = NULL WHERE pjesma_id = " . $pjesma_id;
    izvrsiUpit($con, $query);

    zatvoriVezuNaBazu($con);
    header("Location: " . $_GET['header']);
?>
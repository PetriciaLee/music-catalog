<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    
    $naziv_kuce = $_POST["naziv_kuce"];
    $opis = $_POST["opis_kuce"];

    $con = spojiSeNaBazu();
    $query = "INSERT INTO `medijska_kuca`(`naziv`, `opis_kuce`) VALUES ('$naziv_kuce','$opis')";

    izvrsiUpit($con, $query);


    zatvoriVezuNaBazu($con);
    header('Location: medijske_kuce.php');
    ?>
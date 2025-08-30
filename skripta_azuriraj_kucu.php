<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    
    $naziv_kuce = $_POST["naziv_kuce"];
    $opis = $_POST["opis_kuce"];
    $kuca_id = $_POST["kuca_id"];

    if(!empty($naziv_kuce) && !empty($opis)){
        $con = spojiSeNaBazu();
        $query = "UPDATE medijska_kuca SET opis = '$opis', naziv = '$naziv_kuce' WHERE medijska_kuca_id = $kuca_id" ;
        izvrsiUpit($con, $query);
    
    
        zatvoriVezuNaBazu($con);
    }
    header('Location: medijske_kuce.php');
    ?>
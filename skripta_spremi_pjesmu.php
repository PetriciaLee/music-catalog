<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 2 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    $pjesma_id = $_GET['pjesma_id'];
    $kuca_id = $_GET['kuca_id'];

    $datum_kreiranja = formatiraj_datum_sql(date("d.m.Y H:i:s"));
    $korisnik_id = $user_data["korisnik_id"];
    $naziv = $_POST["naziv"];
    $opis = $_POST["opis"];
    $poveznica = $_POST["poveznica"];

    $con = spojiSeNaBazu();
    $query = "INSERT INTO `pjesma`(`korisnik_id`, `naziv`, `poveznica`, `opis`, `datum_vrijeme_kreiranja`, `broj_svidanja`) VALUES ($korisnik_id,'$naziv','$poveznica','$opis','$datum_kreiranja',0)";

    izvrsiUpit($con, $query);


    zatvoriVezuNaBazu($con);
    header("Location: novapjesma.php");
?>
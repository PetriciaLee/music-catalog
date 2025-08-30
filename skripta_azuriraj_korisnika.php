<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    $korisnik_id = $_POST["korisnik_id"];
    $korime = $_POST["korime"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];
    $lozinka = $_POST["lozinka"];
    $tip_korisnika = $_POST["tip_korisnika"];

    $con = spojiSeNaBazu();

    $query = '';
    if(isset($_POST['mod_za'])){
        $medijska_kuca_id = $_POST["mod_za"];

        $query = "UPDATE korisnik
    SET tip_korisnika_id = $tip_korisnika,
        korime = '$korime',
        ime = '$ime',
        prezime = '$prezime',
        email = '$email',
        lozinka = '$lozinka',
        medijska_kuca_id = $medijska_kuca_id
    WHERE korisnik_id = $korisnik_id";
    } else{
        $query = "UPDATE korisnik
    SET tip_korisnika_id = $tip_korisnika,
        korime = '$korime',
        ime = '$ime',
        prezime = '$prezime',
        email = '$email',
        lozinka = '$lozinka'
    WHERE korisnik_id = $korisnik_id";
    }


    izvrsiUpit($con, $query);


    zatvoriVezuNaBazu($con);
    header('Location: korisnici.php');
    ?>
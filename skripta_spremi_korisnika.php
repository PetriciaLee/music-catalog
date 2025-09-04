<?php
    include('predglavlje.php');
    if($_SESSION['user_role_id'] > 0 || !isset($_SESSION['user_role_id'])){
        header("Location: prijava.php");
        die;
    }

    $korime = $_POST["korime"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];
    $lozinka = $_POST["lozinka"];
    $tip_korisnika = $_POST["tip_korisnika"];

    $con = spojiSeNaBazu();
    $query = "INSERT INTO korisnik (tip_korisnika_id, korime, ime, prezime, email, lozinka) VALUES ($tip_korisnika,'$korime','$ime','$prezime','$email','$lozinka')";

    izvrsiUpit($con, $query);


    zatvoriVezuNaBazu($con);
    header('Location: korisnici.php');
    ?>
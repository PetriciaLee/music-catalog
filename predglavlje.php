<?php
session_start();

    global $user_data;
    include("baza.php");

  if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $con = spojiSeNaBazu();
    $query = "select * from korisnik where korisnik_id = '$user_id' limit 1";
    $result = mysqli_query($con,$query);
    if($result){
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);
      }
    }
    zatvoriVezuNaBazu($con);
  }
    function formatiraj_datum($datum_vrijeme) {
      $dt = new DateTime($datum_vrijeme);
      $formatirani_datum = $dt->format('d.m.Y');
      $formatirano_vrijeme = $dt->format('H:i:s');
  
      return $formatirani_datum . " " . $formatirano_vrijeme;
  }
  
  function formatiraj_datum_sql($datum_vrijeme) {
      $dt = DateTime::createFromFormat('d.m.Y H:i:s', $datum_vrijeme);
      if ($dt !== false) {
          $formatirani_datum = $dt->format('Y-m-d H:i:s');
          return $formatirani_datum;
      } else {
          return "Neispravan format: ". $datum_vrijeme. " treba biti: d.m.Y H:i:s" ;
      }
  }

?>
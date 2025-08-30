<?php
    include('predglavlje.php');
?>
<?php
     if(isset($user_data['tip_korisnika_id']) && $user_data['tip_korisnika_id']<=2)

          {
echo "<a href='mojepjesme.php'>Moje pjesme</a>";
          }
        if(isset($user_data['tip_korisnika_id']) && $user_data['tip_korisnika_id']<=0)
 {
    echo "<a href='korisnici.php'>Moji korisnici</a>";
    echo "<a href='medijske_kuce.php'>Medijske kuće</a>";
 }
 if(isset($user_data['tip_korisnika_id']) && $user_data['tip_korisnika_id'] <=1){
   echo "<a href='ponude.php'>Ponude</a>";
 }

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $con = spojiSeNaBazu();
    $user_name = $_POST['korime'];
    $password = $_POST['lozinka'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {


      $query = "select * from korisnik where korime = '$user_name' limit 1";
      $result = mysqli_query($con,$query);
      if($result){
        if($result && mysqli_num_rows($result) > 0)
        {
          $user_data = mysqli_fetch_assoc($result);

          if($user_data['lozinka'] === $password)
          {
            $_SESSION['user_id'] = $user_data['korisnik_id'];
            $_SESSION['user_role_id'] = $user_data['tip_korisnika_id'];
            $_SESSION['username'] = $user_data['korime'];
            zatvoriVezuNaBazu($con);
            header("Location: index.php");
            die;
      }
        }
      }
        echo "Krivo korisničko ime ili lozinka";
        zatvoriVezuNaBazu($con);
    }
      else
    {
        echo "Krivo korisničko ime ili lozinka";
        zatvoriVezuNaBazu($con);
    }
  }
?>


<html lang="hr">
<head>
<title>IWA Projekt</title>
<head>
<meta charset="UTF-8">
<meta name="description" content="Projekt na temu Glazbeni katalog">
<meta name="keywords" content="IWA, Projekt, Glazbeni katalog ">
<meta name="author" content="Petra Jakopović">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stil.css" rel="stylesheet" type="text/css">
 </head>
  <body>
  <div id="glavni">
     
<nav>
 <div id="lijevo">
   <a href="index.php"><b>IWA Projekti</b></a> 
</div>  
<a href="o_autoru.html">O autoru</a>
<a href="medijske_kuce.php">Medijske kuće</a>
<a href="korisnici.php">Svi korisnici</a>  
<a href='pjesme.php'>Pjesme</a> 
<a href='index.php'>Početna</a> 
    
</nav>

<div id="logo"><a name ="sidro"></a>
</div>
<br />


<div id="sadrzaj">
 <h1>Prijava</h1>
 <div id="sadrzaj">
  <form action="prijava.php" method="post">
            <label for="korime">Korisničko ime:</label>
            <input type="text" id="korime" name="korime" required><br>

            <label for="lozinka">Lozinka:</label>
            <input type="password" id="lozinka" name="lozinka" required><br>
<br>
            <button type="submit">Prijavi se</button>
        </form>
</div>
</div><br />
 <footer><b> &copy Petra Jakopović 2024. | FOI </b></footer>   
      </div>
    </body>
    </head>
</html>
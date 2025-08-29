 <footer><b> &copy Petra Jakopović 2024. | FOI </b></footer>  

      </div>
    </body>
    </head>
</html>


<?php 
        
     if(!empty($user_data)){

      $ime = $user_data['ime'];
      $prezime = $user_data['prezime'];
      $korime = $user_data['korime'];
      $tip_korisnika = $user_data['tip_korisnika_id'];

      echo "Korisnik: $ime $prezime <strong>Username: $korime</strong> <strong>Vrsta: $tip_korisnika </strong>";
      }
     else {
      echo "Dobrodošli!";
      } 
?>

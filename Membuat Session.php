<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Session</title>
  </head>
  <body>
    <?php

      //Inisialisasi data session
      session_start();
      //Set session jika belum ada
      if(!isset($_SESSION['test'])) {
        $_SESSION['test'] = 'value';
      }
      else {
        echo 'Session di-set <br />';
        //mencetak nilai session test
        echo 'Nilai:' .$_SESSION['test'] .'<br />';

        //Mencetak semua elemen session
        print_r($_SESSION);
      }
     ?>
     <p>
       Tekan Refresh (F5)
  </body>
</html>

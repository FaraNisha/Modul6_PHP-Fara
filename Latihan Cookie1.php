<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Cookie</title>
  </head>
  <body>
    <?php

      //men-set nilai Cookie
      setcookie('nama_cookie','nilai_cookie');

      //mendapatkan nilai cookie
      echo $_COOKIE['nama_cookie'];
     ?>
     <p>
     Tekan Refresh (F5);
  </body>
</html>

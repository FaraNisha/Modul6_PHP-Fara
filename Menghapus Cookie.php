<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hapus Cookie</title>
  </head>
  <body>
    <?php
      setcookie('nama_cookie', 'nilai_cookie');
      if(isset($_COOKIE['nama_cokie'])) {
        echo 'cookie di-set <br />';

        /*menghapus cookie, dengan masa berlaku 1 jam yang Lalu
        setcookie('nama_cookie', '', time() - 1 * 3600);*/

        echo 'cookie dihapus';
      }
      else {
        echo 'unset';
      }
     ?>
     <p>Tekan Refresh (F5)</p>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cek Dukungan Cookie</title>
  </head>
  <body>
    <?php
      if(isset($_GET['q']) && $_GET['q'] == 1) {
        if(isset($_COOKIE['test'])) {
          echo 'support';
        }
        else {
          echo 'tidak support';
        }
      }
      else {
        setcookie('test','value');

        $self = $_SERVER['PHP_SELF'];
        //Redireksi ke current script
        header('location: ' .$self. '?q=1');
        exit;
      }
     ?>
  </body>
</html>

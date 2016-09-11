<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
      body {background-image: url(http://tanakamusic.com/wp-content/uploads/2013/05/Daft-Punk-SNL.jpg);
            background-size: cover;
            background-attachment: fixed;}
      h1, h2 {color: #FFF; font-family: 'Open Sans';
         top: 60%;
         width: 100%;
         text-align: center;
         position: absolute;
         font-size: 5.5em
       }
       h2 {
         position: relative;
         top: 19em;
         font-size: 2em;
       }
    </style>
  </head>
  <?php include_once("appel.php") ?>
  <body>
  	<h1>
      <?php
        // Thanks to @mfonda on Stackoverflow
        // http://stackoverflow.com/questions/4868896/how-do-i-explode-an-integer
        $array = str_split($participants);
        // On concatène le résultat avec un "."
        echo $array[0].$array[1].$array[2].".".$array[3].$array[4].$array[5];
      ?>
    </h1>
    <h2>participants</h2>
  </body>

</html>

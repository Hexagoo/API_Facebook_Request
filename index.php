<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
      h1, h2 {color: #333; font-family: 'Open Sans';
         top: 30%;
         width: 100%;
         text-align: center;
         position: absolute;
         font-size: 5.5em
       }
       h2 {
         position: relative;
         top: 11.5em;
         font-size: 2em;
       }
    </style>
  </head>
  <?php include_once("appel.php") ?>
  <body>
  	<h1>
      <?php
        // Merci à  @mfonda sur Stackoverflow.com
        // http://stackoverflow.com/questions/4868896/how-do-i-explode-an-integer
        $array = str_split($participants);
        // On concatène le résultat avec un "."
        echo $array[0].$array[1].$array[2].".".$array[3].$array[4].$array[5];
      ?>
    </h1>
    <h2>participants</h2>
  </body>

</html>

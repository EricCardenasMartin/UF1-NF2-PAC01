<html>
  <head>
    <title> My Movie Site </title>
  </head>
<body>
<?php
  define("FAVMOVIE", "The Life of Brian");
  echo "My favorite movie is ";
  echo FAVMOVIE;
  echo nl2br("\n");
  $movierate = 5;
  echo "My movie rating for this movie is: ";
  echo $movierate;
?>
</body>
</html>

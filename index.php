<html>

<head>
  <meta charset="utf-8">
  <script src="play.js"></script>
  <link type="text/css" rel="stylesheet" href="style.css" />
  <title>why are you doing this to me soham</title>
</head>

<?php
    $directory = scandir("files");
    foreach ($directory as $file) {
        if ($file !== "." && $file !== "..") {
            echo '<p><button id="';
            echo $file;
            echo '" onclick="play()">';
            echo $file;
            echo '</button></p>';
        }
    }
    closedir($directory);
?>

</html>

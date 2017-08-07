<html>

<head>
  <meta charset="utf-8">
  <script src="play.js"></script>
  <link type="text/css" rel="stylesheet" href="style.css" />
  <title>Soundboard!</title>
</head>

<body>
<?php
    $directory = scandir("files");
    foreach ($directory as $file) {
        if ($file !== "." && $file !== "..") {
            $fileTrim = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
            echo '<p><button id="';
            echo $file;
            echo '" onclick="play(this.id)">';
            echo $fileTrim;
            echo '</button></p>';
        }
    }
    closedir($directory);
?>
</body>

</html>

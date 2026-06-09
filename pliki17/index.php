<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "kino");
    mysqli_set_charset($polaczenie, "utf8mb4");
    $close = mysqli_close($polaczenie);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista aktorów | KinoTEKA</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header class="headerJeden">
        <h2><a href="index.php">KinoTEKA</a></h2>
        <div class="all">
            <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "kino");
                $zapytanie = "SELECT * FROM aktorzy ORDER BY imie ASC";
                $wynik = mysqli_query($polaczenie, $zapytanie);
                while($wiersz=mysqli_fetch_row($wynik)){
                    $zdjecie = $wiersz[0];
                    echo "<div class=one>
                                <img src=$wiersz[4] title=$wiersz[1] $wiersz[2]>
                                <p><a href=aktor.php?id=$wiersz[0]>$wiersz[1] $wiersz[2]</a></p>
                    </div>";
                };
                $close = mysqli_close($polaczenie);
            ?>
        </div>
    </header>
    <header class="headerDwa">
        <p><em><i>W naszej bazie znajdują się najlepsi aktorzy</em></i></p>
        <div class="one">
            <?php
            
            ?>
        </div>
    </header>
    <main></main>
</body>
    <footer>Autor: Sigma</footer>
</html>
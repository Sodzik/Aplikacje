<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje o aktorze | KinoTEKA</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2><a href="index.php">KinoTEKA</a></h2>
    </header>
    <header>
        <p><em>W naszej bazie znajdują się najlepsi aktorzy<em></p>
    </header>
    <main>
        <h1>Najlepsi aktorzy w naszym kinie</h1>
            <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "kino");
                $id = $_GET['id'];
                $zapytanie = "SELECT imie, nazwisko, plik_awatara  FROM aktorzy WHERE id_aktora=$id";
                $wynik = mysqli_query($polaczenie, $zapytanie);
                while($wiersz=mysqli_fetch_row($wynik)){
                    $zdjecie = $wiersz[0];
                    echo "<div class=one>
                                <img src=$wiersz[2] title=$wiersz[0] $wiersz[1]>
                                <h1>$wiersz[0] $wiersz[1]</h1>
                    </div>";
                };
                $id=$_GET['id'];
                $zapytanie1 = "SELECT f.id_filmu, f.tytul, f.rok_produkcji FROM filmy AS f JOIN filmy_aktorzy AS fa ON f.id_filmu = fa.id_filmu WHERE fa.id_aktora = $id";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                $ileFilmow = mysqli_num_rows($wynik1);
                if($ileFilmow != 0){
                    echo "$wiersz[0] znajduje się na listach obsady $ileFilmow znanych nam produkcji";
                }
                else{
                    echo "$wiersz[0] nie znajduje się na listach obsady znanych nam produkcji";
                }


                $close = mysqli_close($polaczenie);
            ?>
            
    </main>
    <footer><strong>Autor: Sigma</strong></footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header> 
        <h3>Portal społecznościowy - Panel Administratora</h3>
    </header>
    <main>
        <section>
            <h4>Użytkownicy</h4>
            <?php
                $mysqli = mysqli_connect('localhost', 'root','','dana4');
                $SQL="SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30";
                $wynik = mysqli_query($mysqli, $SQL);
                while($pok=mysqli_fetch_assoc($wynik)){
                    echo $pok["id"].". ".$pok["imie"]." ".$pok["nazwisko"]." ".date("Y")-$pok["rok_urodzenia"]." lat"."<br>";
                }
            ?>
            <a href="settings.html">Inne ustawienia</a>
        </section>
        <section>
            <h4>Podaj id użytkownika</h4>
            <input type="number">
            <button>ZOBACZ</button>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: SIGMA</p>
    </footer>
</body>
</html>
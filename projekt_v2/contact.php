<?php
    $title = "Dane Kontaktowe:";
    include "./include/lib.php";
?>
<!DOCTYPE html>
<html lang="pl">
<?php
    require "./include/head.php";
?>
<body>
    <?php
        require "./include/header.php";
        renderH1($title);
    ?> 
    <div class='opis'> 
    <p>Numer telefonu: +48 123 456 789</p> <br>
    <p>Adres: Ul.Fiołkowa 34, Poznań</p> <br>
    <p>Jeśli chcesz się więcej dowiedzieć lub nas o coś zapytać to zadzwoń pod podany numer lub napisz do nas poniżej i odpowiemy ci jak najszybciej.</p> 
    </div>
    <form action="contact.php" method="post" id="form">
      <input type="email" placeholder="E-mail" name="email" id="mail" autocomplete="off">
      <br>
      <textarea name="zapytanie" id="zapytanie" cols="30" rows="10" minlength="20" placeholder="Zapytaj nas!"></textarea>
      <br>
      <button type="submit" name="wyslij">Wyślij</button>
  </form> 
      <img src="./zdjęcia/ludek.png" alt="zdjęcie - znak zapytania" id="Ludek">
</body>
<?php
    require "./include/footer.php";
?>
</html>
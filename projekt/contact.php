<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="styl.css">
    <header>
    <div class="container">
      <h1>Kontakt</h1>
    </div>
    <?php
        include "nav.php";
      ?>
  </header>
<body >
  
  <form action="contact.php" method="post" id="form">
      <input type="email" placeholder="Email" name="email" id="mail" autocomplete="off">
      <br>
      <input type="textarea" placeholder="Zapytaj nas!" name="pytanie" minlength="20" id="zapytanie" autocomplete="off">
      <br>
      <button type="submit" name="wyslij">Wyślij</button>
  </form>
</body>
<?php
    require "footer.php"
  ?>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <?php include('header.php'); ?>
    
    <h1>Kontakt</h1>
    <form id="contact-form">
        <input type="text" name="name" placeholder="Imie">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Wiadomosc"></textarea>
        <button type="submit">Wyslij</button>
    </form>

    <?php include('footer.php'); ?>
</body>
<script src="./script.js"></script>
</html>

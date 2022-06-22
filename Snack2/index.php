<?php 
    $name = '';
    $email = '';
    $age = '';
    if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="name" placeholder="Inserisci il tuo nome">
        <input type="text" name="email" placeholder="Inserisci la tua mail">
        <input type="text" name="age" placeholder="Inserisci la tua età">
        <input type="submit">
    </form>
    <?php if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])) {
        if(strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)) : ?>
        <h2>Accesso riuscito</h2>
    <?php else : ?>
        <h2>Accesso negato</h2>
    <?php endif;} ?>
</body>
</html>
<?php 
    $partite = [
        [
            'squadraCasa' => 'Inter',
            'squadraOspite' => 'Milan',
            'puntiCasa' => 70,
            'puntiOspite' => 20,
        ],
        [
            'squadraCasa' => 'Milan',
            'squadraOspite' => 'Inter',
            'puntiCasa' => 10,
            'puntiOspite' => 80,
        ],
        [
            'squadraCasa' => 'Juve',
            'squadraOspite' => 'Inter',
            'puntiCasa' => 40,
            'puntiOspite' => 60,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i < count($partite); $i++): ?>
            <li> <?= $partite[$i]["squadraCasa"]. " - " .$partite[$i]["squadraOspite"]. " | " .$partite[$i]["puntiCasa"]. "-" .$partite[$i]["puntiOspite"]; ?> </li>
        <?php endfor; ?>
</ul>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 19;
    $gender = 'homme';
    if($age >= 18 && $gender == 'homme') {
        echo 'Vous êtes un homme majeur';
    } else if($age < 18 && $gender == 'homme') {
        echo 'Vous êtes un homme mineur';
    } else if($age < 18 && $gender == 'femme') {
        echo 'Vous êtes une femme mineure';
    } else {
        echo 'Vous êtes une femme majeure';
    }
    ?>
    <?php
    if($gender == 'homme') {
        echo 'C\'est un développeur';
    } else {
        echo 'C\'est une développeuse';
    }
    if($age < 18) {
        echo 'Tu es mineur·e';
    } else {
        echo 'Tu es majeur·e';
    }
    ?>
</body>
</html>
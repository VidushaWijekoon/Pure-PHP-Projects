<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hello <?= "Vidusha Wijekoon" ?></h2>

    <?php

    $firstname = "Vidusha";
    $lastname = "Wijekoon";
    $age = 33;

    ?>

    <p>My Name is <?= "{$firstname} {$lastname} " ?> and i'm <?= "{$age}" ?> years old</p>
</body>

</html>
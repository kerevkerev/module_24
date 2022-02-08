<?php
require_once './classes/Machine.php';

$car1 = new Car('Закись азота', "Ткань", "Red");
$buldozer1 = new Bulldozer('Pазмахивать ковшом', 200);
$tank1 = new Tank('Пушка', 200, 'T-34');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Модуль 24</title>
</head>

<body>
    <?php
    echo $car1->useOptions();
    echo $buldozer1->useOptions();
    echo $tank1->useOptions();
    ?>
</body>

</html>
<?php

use App\Behavioral\ConcreteSubject;
use App\Behavioral\Observer;

require "../vendor/autoload.php";

$messager = new ConcreteSubject();

$batman = new Observer("Batman");
$messager->attach($batman);

$superman = new Observer("Superman");
$messager->attach($superman);

$messager->someBusinessLogic();
$messager->someBusinessLogic();

$messager->detach($batman);

$messager->someBusinessLogic();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designs Patterns</title>
</head>

<body>

</body>

</html>
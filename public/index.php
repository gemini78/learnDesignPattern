<?php

use App\Structural\ISubject;
use App\Structural\Proxy;
use App\Structural\RealSubject;

use App\Behavioral\ConcreteSubject;
use App\Behavioral\Observer;

require "../vendor/autoload.php";

/*PROXY*/
function clientCode(ISubject $subject)
{
    $subject->request();
}

echo "Client: Executing code with the realSubject";
$realSubject = new RealSubject;
clientCode($realSubject);

echo "<br>";

echo "<br><br>Client: Executing code with the proxy";
$proxy = new Proxy($realSubject);
clientCode($proxy);
/*FIN PROXY*/

/*OBSERVER*/
$messager = new ConcreteSubject();

$batman = new Observer("Batman");
$messager->attach($batman);

$superman = new Observer("Superman");
$messager->attach($superman);

$messager->someBusinessLogic();
$messager->someBusinessLogic();

$messager->detach($batman);

$messager->someBusinessLogic();
/* FIN OBSERVER*/

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
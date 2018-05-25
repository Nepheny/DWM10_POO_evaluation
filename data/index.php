<?php
    spl_autoload_register(function($class) {
        include("./class/" . $class . ".php");
    });
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Entrainement POO</title>
    </head>
    <body>
        <?php
            RoutingClass::route([
                'templates' => [
                    'header',
                    'main',
                    'footer'
                ],
                'data' => [
                    'name' => 'Crystal',
                    'description' => '26 ans, développeuse',
                    'contact' => 'mon mail'
                ]
            ]);
        ?>
    </body>
</html>
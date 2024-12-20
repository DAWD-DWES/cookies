<html>
    <head>
        <title>Accessing Cookies with PHP</title>
    </head>
    <body>
        <?php if (isset($_COOKIE["nombre"])): ?>
            <?=
            "Bienvenido " . $_COOKIE["nombre"] . "<br />" .
            "Su edad es " . $_COOKIE["edad"] . "<br />"
            ?>
        <?php else: ?>
            <?= "Lo siento ... no le reconozco" . "<br />" ?>
        <?php endif ?>
    </body>
</html>
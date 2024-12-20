<?php
setcookie("nombre", "John Watkin", time() + 3600, "/", "", 0);
setcookie("edad", "36", time() + 3600, "/", "", 0);
?>
<html>
    <head>
        <title>Setting Cookies with PHP</title>
    </head>
    <body>
        <?= "Set Cookies" ?>
    </body>
</html>

<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Aquí podries comprovar les credencials si fos necessari
        // ...

        // Mostrar un missatge d'èxit
        echo "Sessió iniciada correctament!";

        // Redirigir a una altra pàgina
        header("Refresh: 2; url=https://htmlpreview.github.io/?https://raw.githubusercontent.com/yulangzhu/rocketteamsl/main/index.html");
    }
?>

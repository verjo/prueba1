<?php

    if (isset($_GET['CAMPO'])) {
        // Realizamos una validación
        var_export($_GET['campo']);
    } else {
        header('location:index.html');
    }

?>
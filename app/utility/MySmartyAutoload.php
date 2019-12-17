<?php
spl_autoload_register(function ($name) {
    require_once "app/Controller/class/{$name}.class.php";
});

<?php
/**
 * Load classes using annonymous functions
 */
spl_autoload_register(function ($class) {
    include 'src/' . $class . '.php';
});
?>

<?php 


    define('WEBROOT', dirname(__FILE__));
    define('ROOT', dirname(WEBROOT));
    define('DS', DIRECTORY_SEPARATOR);
    define('CORE', ROOT.DS.'core');
    define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

    require CORE.DS.'includes.php';
    new Dispatcher();
?>

<script>document.write('<script src="http://' + (location.host || ' ').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
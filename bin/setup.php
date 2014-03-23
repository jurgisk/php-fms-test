<?php
$binDir = dirname(__FILE__);
$libDir = realpath($binDir.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'library');
set_include_path(get_include_path() . PATH_SEPARATOR . $libDir);

function autoloader($className) {
    global $libDir;
    $fileName = $libDir.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $className).'.php';

    if(file_exists($fileName)) {
        require_once($fileName);
    } else {
        throw new \Exception('Loading class '.$fileName.' failed - no such file present');
    }
}
spl_autoload_register('autoloader');

try {
    $pdo = new PDO('mysql:dbname=[db name here];host=[host here]', '[user name here]', '[password here]');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    throw new \Exception('PDO connection failed: ' . $e->getMessage());
}

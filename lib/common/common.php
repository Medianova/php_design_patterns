<?php

// enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * provide simple autoloader
 */
spl_autoload_register(function($className) {

    $pathParts = explode('\\', $className);
    $className = array_pop($pathParts);
    $patternFolder = camelCaseToUnderscore(array_shift($pathParts));

    $path = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.$patternFolder.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR;

    for($i = 0; $i < count($pathParts); $i++) {
        $path .= camelCaseToUnderscore($pathParts[$i]).DIRECTORY_SEPARATOR;
    }

    $path .= $className.'.php';

    require_once $path;
});

/**
 * Convert given string in CamelCase to underscore: camel_case
 * @param string $str
 * @return string
 */
function camelCaseToUnderscore($str) {
    $str[0] = strtolower($str[0]);
    $func = create_function('$c', 'return "_" . strtolower($c[1]);');
    return preg_replace_callback('/([A-Z])/', $func, $str);
}
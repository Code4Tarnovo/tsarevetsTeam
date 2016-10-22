<?php
require_once ('lang/langFunctions.php');

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
$lang = (isset($_GET['lang']) && $_GET['lang'] != '') ? $_GET['lang'] : NULL;


if (file_exists("{$url}.php") && !is_dir($url)) {
    $_SESSION['uri'] = $_SERVER['REQUEST_URI'];
    require_once ("{$url}.php");
}
elseif (isset($lang) && !is_dir($lang)) {
    if (file_exists("lang/{$lang}.php")) {
        changeLanguage($lang, $_SESSION['uri']);
    }
    else {
        # ако не съществува вадим или записваме грешка 404 (Не е намерен)
    }
}
else {
    $_SESSION['uri'] = $_SERVER['REQUEST_URI'];
}
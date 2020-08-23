<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.html';
        break;
    case '' :
        require __DIR__ . '/views/index.html';
        break;
    default:
        require __DIR__ . '/views/index.html';
        break;
}

<?php

require_once "config/autoload.php";

// Initialiser le routeur et gérer la requête
$router = new Router();
$router->handleRequest($_GET);
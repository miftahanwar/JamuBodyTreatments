<?php
// router.php

// Jika request file ada di folder public, berikan langsung
if (php_sapi_name() === 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false; // File statis, dilayani langsung
    }
}

// Selain file statis, arahkan ke index.php
require_once __DIR__ . '/index.php';

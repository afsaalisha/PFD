<?php
require_once __DIR__ . '/../controllers/AssetController.php';

// Load .env manually
$env = parse_ini_file(__DIR__ . '/../.env');
foreach ($env as $key => $value) {
    putenv("$key=$value");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AssetController();
    $controller->createAsset();
} else {
    require_once __DIR__ . '/../views/form.php';
}

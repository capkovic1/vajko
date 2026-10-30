<?php

// Require the class loader to enable automatic loading of classes
require __DIR__ . '/../Framework/ClassLoader.php';

use Framework\Core\App;

try {
    // Create an instance of the App class
    $app = new App();

    // Run the application
    $app->run();
} catch (\Throwable $e) {
    // Toto zachytí výnimky aj moderné PHP chyby a vypíše presne, kde to padlo
    echo '<div style="background: #222; color: #ff5555; padding: 20px; font-family: monospace; z-index: 99999; position: relative;">';
    echo '<h2>Nastala chyba (Throwable):</h2>';
    echo '<p><strong>Správa:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><strong>Súbor:</strong> ' . htmlspecialchars($e->getFile()) . ' (riadok ' . $e->getLine() . ')</p>';
    echo '<h3>Trace:</h3>';
    echo '<pre style="white-space: pre-wrap;">' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    echo '</div>';
}

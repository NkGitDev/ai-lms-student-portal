<?php

try {
    // Forward Laravel requests through Vercel serverless function
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    // Agar Laravel boot hone mein ya database connect karne mein crash hoga, toh yeh error dikhega
    http_response_code(500);
    echo "<h1>Laravel Crash Error:</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " on line " . $e->getLine() . "</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Chyba aplikácie</title>
    <style>
        body { font-family: sans-serif; padding: 40px; text-align: left; color: #333; background: #f8f9fa; }
        h1 { color: #e74c3c; }
        .error-box { background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 900px; margin: 0 auto; }
        pre { background: #1e1e1e; color: #dcdcdc; padding: 15px; border-radius: 5px; overflow-x: auto; font-size: 13px; }
        .file-info { background: #fff3cd; padding: 10px; border-left: 4px solid #ffc107; margin: 15px 0; }
    </style>
</head>
<body>
<div class="error-box">
    <h1>Ups, nastala chyba!</h1>

    <?php
    $errorMessage = 'Niečo sa pokazilo v aplikácii.';
    $file = '';
    $line = '';
    $trace = '';

    // Zistíme hlavnú výnimku alebo výnimku v $data
    $currentException = null;
    if (isset($exception) && $exception instanceof \Throwable) {
        $currentException = $exception;
    } elseif (isset($data['exception']) && $data['exception'] instanceof \Throwable) {
        $currentException = $data['exception'];
    }

    if ($currentException) {
        $errorMessage = $currentException->getMessage();
        $file = $currentException->getFile();
        $line = $currentException->getLine();
        $trace = $currentException->getTraceAsString();

        // Ak je to obalená výnimka (HttpException), vytiahneme skutočnú pôvodnú chybu zvnútra!
        $previous = $currentException->getPrevious();
        if ($previous) {
            $errorMessage = $previous->getMessage() . ' (Pôvodná chyba: ' . get_class($previous) . ')';
            $file = $previous->getFile();
            $line = $previous->getLine();
            $trace = $previous->getTraceAsString();
        }
    } elseif (isset($data['message'])) {
        $errorMessage = $data['message'];
    }
    ?>

    <p><strong>Správa:</strong> <span style="color: #e74c3c;"><?= htmlspecialchars($errorMessage) ?></span></p>

    <?php if (!empty($file)): ?>
        <div class="file-info">
            <strong>Súbor:</strong> <?= htmlspecialchars($file) ?><br>
            <strong>Riadok:</strong> <?= $line ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($trace)): ?>
        <h3>Trace:</h3>
        <pre><?= htmlspecialchars($trace) ?></pre>
    <?php endif; ?>

    <p style="text-align: center; margin-top: 20px;"><a href="/">Návrat na úvodnú stránku</a></p>
</div>
</body>
</html>

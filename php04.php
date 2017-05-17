<?php 
    require_once 'sentences.php';
    require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP: Mystery sentence</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Exersise 4</h1>
    <p><?= sentence($nouns, $verbs, $objects)?></p>
</body>
</html>
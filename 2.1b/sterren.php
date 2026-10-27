<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterren</title>
</head>
<body>

    <h1>Sterrenpatroon</h1>

    <?php
    for ($ster = 1; $ster <= 5; $ster++) {
        echo str_repeat("*", $ster) . "<br>";
    }

    ?>
</body>
</html>
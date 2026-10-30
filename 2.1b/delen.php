<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Delen</title>
</head>
<body>

    <h1>Deelbaarheid controleren</h1>

    <form method="post">
        <label for="deeltal">Deeltal:</label>
        <input type="number" id="deeltal" name="deeltal" required>

        <label for="deler">Deler:</label>
        <input type="number" id="deler" name="deler" required>

        <button type="submit" name="controleer">Controleer</button>
    </form>

    <?php
    if (isset($_POST['controleer'])) {
        $deeltal = (int) $_POST['deeltal'];
        $deler = (int) $_POST['deler'];

        if ($deler == 0) {
            echo "<p>De deler mag niet 0 zijn.</p>";
        } elseif ($deeltal % $deler == 0) {
            echo "<p>$deeltal is deelbaar door $deler.</p>";
        } else {
            echo "<p>$deeltal is niet deelbaar door $deler.</p>";
        }
    }
    ?>

</body>
</html>
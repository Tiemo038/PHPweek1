<?php
if (isset($_POST['submit'])) {
    $tafel = $_POST["tafel"];
    $begin = $_POST["begin"];
    $eind = $_POST["eind"];
 
    for ($i = $begin; $i <= $eind; $i++) {
        $uitkomst = $tafel * $i;
 
        echo "$tafel x $i = $uitkomst <br>";
    }
}
else {
    echo "Voer de velden in.";
}
?>
 
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Tafels berekenen</title>
</head>
<body>
 
<form method="POST" action="">
    <label>
        Tafelgetal
        <input type="number" name="tafel" required>
    </label>
    <br>
 
    <label>
        Begingetal
        <input type="number" name="begin" required>
    </label>
    <br>
 
    <label>
        Eindwaarde
        <input type="number" name="eind" required>
    </label>
    <br>
 
    <button type="submit" name="submit">Verstuur</button>
</form>
 
</body>
</html>
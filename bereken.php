<?php
$render = "Vul een getal in.";
if (isset($_GET["getal"])) {
    $pi = pi();
    //echo $pi ;
    $getal = (float) $_GET["getal"];
    $render = "Diameter: " . ($getal * $pi);
}
?>
<!doctype html>
<html lang="nl">
<head><meta charset="utf-8"><title>Invoer</title></head>
<body>
<form method="get">
<label>Getal <input type="number" name="getal" step="any" required></label>
<button>Bereken</button>
</form>
<p><?= $render ?></p>
</body>
</html>
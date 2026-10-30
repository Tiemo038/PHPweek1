
<form method="post">
    Namen: <input type="text" name="namen">
    <button>Toon namen</button>
</form>

<?php
if (isset($_POST["namen"])) {
    $namen = explode(" ", $_POST["namen"]);

    foreach ($namen as $naam) {
        echo $naam . "<br>";
    }
}
?>

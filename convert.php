<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $euro = floatval($_POST["euro"]);
    $rate = floatval($_POST["rate"]);

    $lek = $euro * $rate;
    ?>

    <!DOCTYPE html>
    <html lang="sq">
    <head>
        <meta charset="UTF-8">
        <title>Rezultati</title>
    </head>
    <body>
        <h1>Rezultati i Konvertimit</h1>
        <p>Vlera në Euro: <strong><?php echo $euro; ?></strong></p>
        <p>Koeficienti i këmbimit: <strong><?php echo $rate; ?></strong></p>
        <p>Shuma e konvertuar në Lekë: <strong><?php echo $lek; ?> Lekë</strong></p>

        <br>
        <a href="index.html">🔙 Kthehu pas</a>
    </body>
    </html>

    <?php
} else {
    echo "Nuk u dërguan të dhëna.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merr të dhënat nga formulari
    $currencies = [
        "euro" => "Euro",
        "usd" => "Dollar Amerikan (USD)",
        "gbp" => "Pound Britanik (GBP)",
        "chf" => "Franga Zvicerane (CHF)",
        "cad" => "Dollar Kanadez (CAD)",
        "aud" => "Dollar Australian (AUD)",
        "sek" => "Korona Suedeze (SEK)"
    ];

    ?>

    <!DOCTYPE html>
    <html lang="sq">
    <head>
        <meta charset="UTF-8">
        <title>Rezultati</title>
    </head>
    <body>
        <h1>Rezultatet e Konvertimit</h1>

        <?php
        foreach ($currencies as $key => $name) {
            $amount = floatval($_POST[$key]);
            $rate = floatval($_POST[$key . "_rate"]);
            $converted = $amount * $rate;
            echo "<p><strong>$name</strong></p>";
            echo "<ul>";
            echo "<li>Shuma: $amount</li>";
            echo "<li>Kursi: $rate</li>";
            echo "<li>Vlera në Lekë: <strong>$converted Lekë</strong></li>";
            echo "</ul>";
        }
        ?>

        <br>
        <a href="index.html">🔙 Kthehu pas</a>
    </body>
    </html>

    <?php
} else {
    echo "Nuk u dërguan të dhëna.";
}
?>

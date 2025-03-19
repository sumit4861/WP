<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["country"] ?? "";

    $visaMessage = match ($country) {
        "U" => "Visa required for most applicants.",
        "C" => "Visa required unless you have an eTA.",
        "I" => "Visa required before travel.",
        "UK" => "Visa depends on the duration of stay.",
        "AUS" => "eVisa available for eligible travelers.",
        default => "Invalid country selection.",
    };

    echo "<h2>Visa Status</h2>";
    echo "<p>$visaMessage</p>";
}
?>

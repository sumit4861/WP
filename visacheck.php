<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["country"] ?? "";

    $visaMessage = match ($country) {
        "USA" => "Visa required for most applicants.",
        "Canada" => "Visa required unless you have an eTA.",
        "India" => "Visa required before travel.",
        "UK" => "Visa depends on the duration of stay.",
        "Australia" => "eVisa available for eligible travelers.",
        default => "Invalid country selection.",
    };
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Status</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 20px; }
        .message { font-size: 18px; font-weight: bold; color: blue; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>Visa Status</h2>
    <p class="message"><?php echo $visaMessage; ?></p>
    <a href="visa.html">Go Back</a>
</body>
</html>

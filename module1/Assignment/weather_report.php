<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    $temperature = 25; // You can change this temperature value as needed.

    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature <= 15) {
        echo "<p>It's cool.</p>";
    } else {
        echo "<p>It's warm.</p>";
    }
    ?>

</body>
</html>

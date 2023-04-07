<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validate Credit Card</h1><hr />
    <?php

    $CreditCard = array( "", "8910-1234-5678-6543", "OOOO-9123-4567-0123");

    foreach ($CreditCard as $CardNumber) {
        if (empty($CardNumber)){
            echo "<p>This Credit Card Number is invalid because it contains an empty string.</p>"; 
        } elseif (!empty($CardNumber)) {
            $newNumber = str_replace("-", "", $CardNumber);
            if (is_numeric($newNumber)){
                echo "<p>This Credit Card Number is numeric: " . $newNumber . "</p>";
            } else {
                echo "<p>Warning! This Credit Card Number is not numeric: " . $newNumber . "</p>";
            }
        }
    }

    ?> 

</body>
</html>
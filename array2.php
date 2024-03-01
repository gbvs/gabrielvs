<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Associative arrays</h1>

    <?php
    $cars=[
        "Tomasz" => "Fiat",
        "John" => "BMW",
        "Alice" => "Mini"
    ];
    $cars["Anna"] = "Toyota";
    
    $jc = $cars['John'];

    echo "The car of John is $jc";
    ?>
</body>
</html>
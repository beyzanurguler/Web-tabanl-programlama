<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tek Sayılar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .number {
            display: inline-block;
            margin: 5px;
            padding: 10px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>1 ile 100 Arası Tek Sayılar</h1>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo "<div class='number'>{$i}</div>";
        }
    }
    ?>
</body>
</html>
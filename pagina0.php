<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horóscopo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<?php
    $data = date_parse($_GET["data"]);


if (($data["month"] == 3 && $data["day"] >= 21) || ($data["month"] == 4 && $data["day"] <= 19)) {
    echo "<h1>Áries</h1>";
} elseif (($data["month"] == 4 && $data["day"] >= 20) || ($data["month"] == 5 && $data["day"] <= 20)) {
    echo "<h1>Touros</h1>";
} elseif (($data["month"] == 5 && $data["day"] >= 21) || ($data["month"] == 6 && $data["day"] <= 21)) {
    echo "<h1>Gêmeos</h1>";
} elseif (($data["month"] == 6 && $data["day"] >= 22) || ($data["month"] == 7 && $data["day"] <= 22)) {
    echo "<h1>Câncer</h1>";
} elseif (($data["month"] == 7 && $data["day"] >= 23) || ($data["month"] == 8 && $data["day"] <= 22)) {
    echo "<h1>Leão</h1>";
} elseif (($data["month"] == 8 && $data["day"] >= 23) || ($data["month"] == 9 && $data["day"] <= 22)) {
    echo "<h1>Virgem</h1>";
} elseif (($data["month"] == 9 && $data["day"] >= 23) || ($data["month"] == 10 && $data["day"] <= 22)) {
    echo "<h1>Libra</h1>";
} elseif (($data["month"] == 10 && $data["day"] >= 23) || ($data["month"] == 11 && $data["day"] <= 21)) {
    echo "<h1>Escorpião</h1>";
} elseif (($data["month"] == 11 && $data["day"] >= 22) || ($data["month"] == 12 && $data["day"] <= 21)) {
    echo "<h1>Sagitário</h1>";
} elseif (($data["month"] == 12 && $data["day"] >= 22) || ($data["month"] == 1 && $data["day"] <= 19)) {
    echo "<h1>Capricórnio</h1>";
} elseif (($data["month"] == 1 && $data["day"] >= 20) || ($data["month"] == 2 && $data["day"] <=18)) {
    echo "<h1>Aquário</h1>";
} else {
    echo "<h1>Peixes</h1>";
}
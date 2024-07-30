<?php

$text = "Priyanshu Maurya";

$data = json_decode(file_get_contents(__DIR__ . "/assets/datas/data.json"), true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>PHP Vercel deploy</title>
</head>
<body>
    <p><?= $text ?></p>
    <img src="/public/assets/img/first.jpeg">
    <img src="/public/assets/img/second.jpeg">
    <?php foreach ($data as $paragraph) : ?>
        <div>
            <h2><?= $paragraph['title'] ?></h2>
            <p><?= $paragraph['text'] ?></p>
        </div>
    <?php endforeach ?>
</body>
</html>
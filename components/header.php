<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <header class="page-header">
        <div class="container">
            <a class="header-email" href="malto:<?= $email ?>">
                <?= $email ?></a>
            <a class="header-phone" href="tel:<?= $phone ?>"><?= $phone ?></a>
        </div>
    </header>

    <main>

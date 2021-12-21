<?php /* Детальная страница скриншота */ ?>

<?php
include 'models/ScreenshotModel.php';
$uuid = $_GET['uuid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>ScreenshotHub</title>
</head>
<body>
<?php
$screenshot = (new ScreenshotModel())->getScreenshotByUUID($uuid);
?>
<?php include "templates/pupup.php" ?>

<div class="wrapper">
    <div class="container">
        <?php include "templates/header.php" ?>
        <main class="detail-information main">
            <img class="detail-information__poster"
                 src="data:image/jpeg;base64, <?= base64_encode($screenshot['sblob']) ?>"
                 alt="Нет фото"/>
            <h1 class="detail-information__author">Автор: <?= $screenshot['login'] ?></h1>
            <h1 class="detail-information__header"><?= $screenshot['description'] ?></h1>
            <span class="detail-information__content">Дата загрузки: <?= $screenshot["upload_date"] ?></span>
        </main>
    </div>
    <?php include "templates/footer.php" ?>
</div>

<script src="js/script.js"></script>
</body>
</html>

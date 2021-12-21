<?php
include 'models/ScreenshotModel.php';
$offset = $_GET['offset'];

$screenshots = (new ScreenshotModel())->getScreenshotsByOffset($offset);
?>

<?php foreach ($screenshots as $screenshot): ?>
    <div class="screenshot">
        <a class="screenshot__link" href="detail.php?uuid=<?= $screenshot['uuid'] ?>">
            <img src="data:image/jpeg;base64, <?= base64_encode($screenshot['sblob']) ?>"
                 class="img-<?= $screenshot['id'] ?>"
                 alt="Нет фото"/>
            <div class="screenshot__info">
                <div class="screenshot__second-row">
                    <span class="screenshot__upload-date"><?= $screenshot['upload_date'] ?></span>
                </div>
            </div>
        </a>
    </div>
<?php endforeach; ?>



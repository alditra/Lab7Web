<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?= $title; ?>
    </title>
</head>

<body>
    <h1>
        <?= $title; ?>
    </h1>
    <hr>
    <p>
        <?= $content; ?>
    </p>
</body>
<?= $this->include('template/header'); ?>
<h1>
    <?= $title; ?>
</h1>
<hr>
<p>
    <?= $content; ?>
</p>
<?= $this->include('template/footer'); ?>

</html>
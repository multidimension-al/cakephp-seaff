<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= h($this->fetch('title')) ?></title>
    <?= $this->fetch('meta'); ?>
    <?= $this->Html->css('seaff.min.css'); ?>
    <?= $this->fetch('css'); ?>
    <?= $this->fetch('script'); ?>
</head>
<body>

<?= $this->fetch('content') ?>

</body>
</html>
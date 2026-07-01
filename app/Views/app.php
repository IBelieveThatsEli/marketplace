<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'My App') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
</head>
<body class="bg-gray-100">
    <?= $this->include('partials/navbar') ?>

    <main class="p-6">
        <?= $this->renderSection('content') ?>
    </main>
  
    <?= $this->include('partials/footer') ?>
</body>
</html>

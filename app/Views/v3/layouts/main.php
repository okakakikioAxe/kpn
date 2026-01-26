<!DOCTYPE html>
<html lang="id">

<head>
    <?= view('v3/partials/head') ?>
    <?= $this->renderSection('google-tag') ?>
    <?= $this->renderSection('custom-head') ?>
</head>

<body class="font-sans text-gray-800">

    <?= view('v3/partials/navbar') ?>

    <?= $this->renderSection('content') ?>

    <?= view('v3/partials/footer') ?>
    <?= view('v3/partials/scripts') ?>
    <?= $this->renderSection('custom-scripts') ?>

</body>

</html>
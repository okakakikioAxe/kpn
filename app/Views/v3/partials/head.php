<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= esc($title ?? 'Company Name') ?></title>
<meta name="description" content="<?= esc($description ?? 'Company description') ?>">

<link rel="stylesheet" href="<?= base_url('css/tailwind_3/output.css') ?>">
<link
    rel="preload"
    href="<?= base_url('fonts/inter/Inter-VariableFont.ttf') ?>"
    as="font"
    type="font/ttf"
    crossorigin>

<!-- Preload hero image (home saja) -->
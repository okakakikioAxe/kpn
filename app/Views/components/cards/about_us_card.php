<div class="h-full rounded-[40px] overflow-hidden animate-about-us-card <?= esc($bg_color) ?> <?= esc($shadow) ?>">
    <div class="relative max-h-[210px]">
        <img loading="lazy" class="object-cover w-full max-h-[210px]" src="<?= esc($image) ?>" alt="<?= esc($image_alt) ?>">
    </div>
    <h3 class="about-us-title"><?= esc($title) ?></h3>
    <p class="about-us-description"><?= esc($description) ?></p>
</div>
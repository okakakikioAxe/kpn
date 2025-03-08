<div class="w-full animate-production-galery-card">
    <div class="flex justify-center w-full animate-production-galery-card">
        <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
            <img loading="lazy" class="object-cover w-full h-full" src="<?= esc($image) ?>" alt="<?= esc($image_alt) ?>">
        </div>
    </div>
    <div class="h-auto mt-[41px]">
        <h3 class="production-title"><?= esc($title) ?></h3>
        <p class="production-description">
            <?= esc($description) ?>
        </p>
    </div>
</div>
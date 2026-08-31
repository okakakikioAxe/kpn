<div id="<?= esc($id ?? '') ?>" class="<?= esc($class ?? 'hidden lg:block w-full mb-[54px] text-start') ?>">
    <h2
        class="text-[28px] h-[32px] md:text-[32px] md:h-[38px] xl:text-[34px] xl:h-[36px] 2xl:text-[36px] 2xl:h-[40px] ubuntu-bold text-[#242424] title-shadow">
        <?= esc($top_title ?? 'top title') ?>
    </h2>
    <span
        class="text-[32px] h-[34px] md:text-[34px] md:h-[38px] xl:text-[38px] xl:h-[40px] 2xl:text-[40px] 2xl:h-[40px] ubuntu-bold text-[#2563EB] title-shadow"><?= esc($bottom_title ?? 'bottom title') ?></span>
</div>
<?= $this->extend('./template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/homepage_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="galerySection" class="relative h-screen w-full bg-white">
  <!-- Background Image -->
  <div class="h-[140px] w-full px-[40px] md:px-[10%] bg-[#F2F8FF] flex justify-center">
    <div class="w-full max-w-[1600px] pt-[30px] ">
      <h1 class=" text-[#001F47] text-start text-[32px] md:text-[34px] font-humanist-bold leading-[100%] -tracking-[0.02em]">GALERY</h1>
      <p class="mt-[12px] text-[#001F47] text-start font-humanist-normal leading-4 text-[14px] md:text-[16px] xl:text-[18px]">Temukan inspirasi lewat berbagai dokumentasi yang sudah kami rangkum.</p>
    </div>
  </div>
  <div class=" pt-[40px] px-[40px] md:px-[10%] flex justify-center w-full ">
    <div class="w-full max-w-[1600px] ">
      <div class="grid grid-cols-[repeat(auto-fit,minmax(110px,1fr))] md:grid-cols-[repeat(auto-fit,minmax(200px,1fr))] gap-[10px] cursor-pointer ">
        <div class="bg-blue-500 aspect-square rounded-2xl hover:scale-105 duration-200 ease-in-out cursor-pointer "></div>
        <div class="bg-red-500 aspect-square rounded-2xl hover:scale-105 duration-200 ease-in-out cursor-pointer "></div>
        <div class="bg-green-500 aspect-square rounded-2xl hover:scale-105 duration-200 ease-in-out cursor-pointer "></div>
        <div class="bg-yellow-500 aspect-square rounded-2xl hover:scale-105 duration-200 ease-in-out cursor-pointer "></div>
        <div class="bg-purple-500 aspect-square rounded-2xl hover:scale-105 duration-200 ease-in-out cursor-pointer "></div>
        <div class="bg-gray-500 aspect-square rounded-2xl hover:scale-105 duration-200 ease-in-out cursor-pointer "></div>
      </div>
    </div>
  </div>

</section>
<?= $this->endSection() ?>
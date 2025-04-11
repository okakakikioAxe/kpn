<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/output.css">
    <link rel="stylesheet" href="/css/global_style.css">
    <link rel="stylesheet" href="/css/admin_galery_style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            background: #1E293B;
            color: white;
            height: 100vh;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin: 5px 0;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background: #334155;
        }

        .header {
            background: white;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar sticky z-5 top-0 h-screen bg-gray-800 text-white p-6 w-64 flex-shrink-0">
            <h1 class="text-xl font-bold">KPN</h1>
            <nav class="mt-5">
                <ul>
                    <li class="py-2"><a href="/admin/galery" class="block px-4 py-2 hover:bg-gray-700">Gallery</a></li>
                    <li class="py-2"><a href="/admin/product" class="block px-4 py-2 hover:bg-gray-700 bg-gray-700 rounded">Produk</a></li>
                    <li class="py-2"><a href="/admin/change-password" class="block px-4 py-2 hover:bg-gray-700">Ubah Password</a></li>
                    <li class="py-2"><a href="/logout" class="block px-4 py-2 hover:bg-red-700 rounded">
                            <p class="text-red-400">Logout</p>
                        </a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="header sticky top-0 z-5 bg-white shadow-md flex justify-between items-center p-6">
                <h2 class="text-xl font-bold">Produk</h2>
                <div>
                    <div class="relative inline-block text-left mr-4">
                        <button id="dropdownButton1" class="px-5 py-[2.5px] w-auto text-white rounded-lg border-[1px] border-white bg-gray-400  cursor-pointer">
                            <div class="flex items-center">
                                <p class="grow text-sm font-medium text-gray-50 selected-language">Semua Kategori</p>
                                <p class="w-[30px]">
                                    <svg id="dropdownIcon1" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </p>
                            </div>
                        </button>
                        <div id="dropdownMenu1Container" class="absolute top-18 right-4 w-full justify-center hidden">
                            <div class="w-full max-w-[1600px] flex justify-end sm:mx-[25px] ">
                                <div id="dropdownMenu1"
                                    class="w-[200px] h-[250px] bg-[#182430] shadow-lg rounded-xl opacity-0 scale-95 transition-all duration-300 transform">
                                    <button onclick="filter('all')" class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">Semua Kategori</button>
                                    <button onclick="filter('hdpe')" class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">HDPE</button>
                                    <button onclick="filter('xpe')" class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">XPE</button>
                                    <button onclick="filter('eva')" class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">EVA</button>
                                    <button onclick="filter('toy')" class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">MAINAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/admin/product/create" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Tambah Produk
                    </a>
                </div>
                
            </header>

            <!-- Scrollable Content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <div id="product-list-container" class="grid grid-cols-6 2xl:grid-cols-12 gap-4">
                    <?php foreach ($images as $image): ?>
                        <div class="thumbnail-container w-full relative cursor-pointer aspect-square  hover:scale-105 transform duration-200 ease-in-out">
                            <img loading="lazy" data-product='<?= json_encode($image) ?>' src="/galery/thumbnail/<?= $image['thumbnail'] ?>" alt="<?= $image['title'] ?>"
                                class=" thumbnail rounded-lg shadow-lg hover:shadow-xl transition relative object-cover w-full h-full">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="product-detail-container" class="w-full justify-center hidden bg-white">
                    <div class="flex flex-col w-full max-w-[1200px]" >
                        <div class="flex w-full max-w-[1200px]">
                            <div class="w-1/2 p-10">
                                <img id="product-detail-image" src="" class="w-full h-full object-cover">    
                            </div>
                            <div class="flex flex-col w-1/2 justify-start items-start p-10">
                                <div class="relative w-full">
                                    <div class="absolute top-0 right-0 h-20 z-10 flex justify-end items-center -translate-y-15">
                                        <button onclick="closeProductDetail()" class="px-4 py-2 text-gray-600 hover:bg-gray-100 cursor-pointer">X</button>
                                    </div>
                                </div>
                                <h3 id="product-detail-title" class=" text-stone-800 text-[26px] font-trebuchet leading-[135%] font-bold"></h3>
                                <div id="product-detail-category" class="mt-1 px-2 py-1 border-2 rounded-4xl font-humanist-normal text-[14px] tracking-wider font-bold text-white"></div>
                                <div id="product-detail-variant-container" class="w-full mt-6">
                                    <div class="flex">
                                        <p class="mr-[4px] text-stone-500 text-[16px] font-[500]">Varian :</p>
                                        <p id="product-detail-variant-title" class="mb-1 text-stone-800 text-[16px] font-humanist-normal font-bold">-</p>
                                    </div>
                                    <div id="variant-select-container" class="w-full grid grid-cols-none" style="grid-template-columns: repeat(auto-fill, minmax(30px, 1fr)); gap: 4px;">
                                    </div>
                                </div>
                                <div id="product-detail-description" class="mt-7 text-stone-800 text-[18px] font-humanist-normal">
                                <!-- <p><strong>Kubus apung</strong> adalah struktur modular berbentuk kubus yang terbuat dari material plastik berkualitas tinggi, biasanya <strong>high-density polyethylene (HDPE)</strong>, yang dirancang untuk mengapung di atas air. Kubus ini saling terhubung satu sama lain membentuk platform terapung yang stabil, serbaguna, dan mudah dirakit.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-[2px] bg-gray-100 my-3.5"></div>
                        <div class="flex w-full justify-end space-x-2 mb-6">
                            <button id="editBtn" class="py-2 px-4 rounded-lg bg-orange-400 text-white hover:bg-orange-500 cursor-pointer">Edit</button>
                            <button id="deleteBtn" class="py-2 px-4 rounded-lg bg-red-400 text-white hover:bg-red-600 cursor-pointer">Hapus</button>
                        </div>
                    </div>
                </div>

                <div id="deleteModal" class="fixed inset-0 z-80 items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
                        <h2 class="text-lg font-semibold text-gray-800">Hapus produk ini?</h2>
                        <p id="contentTitle" class="text-gray-600 mt-2"></p>

                        <div class="flex justify-end mt-4">
                            <button onclick="closeDeleteModal()" class="px-4 py-2 cursor-pointer text-gray-600 border border-gray-300 rounded hover:bg-gray-100">Cancel</button>
                            <button onclick="confirmDelete()" class="px-4 py-2 cursor-pointer ml-2 text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                        </div>
                    </div>
                </div>
                <div id="toastModal" class="fixed z-15 bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg flex flex-col items-center opacity-0 transition-opacity duration-500">
                    <span id="toastMessage"></span>
                    <div class='w-full h-1 bg-green-700 mt-2 relative overflow-hidden'>
                        <div id="toastProgress" class='h-full bg-white w-full absolute left-0'></div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        let successMessage = "";
        // Data for the images
        <?php if (isset($successMessage)): ?>
            successMessage = "<?= $successMessage ?>";
            console.log(successMessage);
        <?php endif; ?>

        const modal = document.getElementById("imageModal");
        
        let currentItem = null;
        const toastModal = document.getElementById("toastModal");
        const toastMessage = document.getElementById("toastMessage");
        const toastProgress = document.getElementById("toastProgress");


        let toastOpenTimer;
        let toastCloseTimer;

        let itemTitleToDelete = null;
        let itemIdToDelete = null;

        function formatDateTime(datetime) {
            // Convert string to Date object
            const date = new Date(datetime.replace(" ", "T")); // Ensure proper parsing

            // Format date to "15 Maret 2025"
            const formattedDate = new Intl.DateTimeFormat('id-ID', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            }).format(date);

            // Format time to "00:46"
            const hours = String(date.getHours()).padStart(2, '0');
            const minutes = String(date.getMinutes()).padStart(2, '0');

            return `${formattedDate} - ${hours}:${minutes}`;
        }

        function closeProductDetail(){
            document.getElementById('product-detail-container').classList.replace("flex", "hidden");
            document.getElementById('product-list-container').classList.replace("hidden", "grid");
            document.getElementById('product-detail-image').src = '';
            document.getElementById('product-detail-title').innerHTML = '';
            document.getElementById('product-detail-description').innerHTML = '';
            document.getElementById('variant-select-container').innerHTML = '';
            document.getElementById('product-detail-variant-title').innerHTML = '-';
            document.getElementById('product-detail-variant-container').classList.add('hidden');
        }

        // Function to create and show toast with progress bar
        function showToast(message) {
            window.clearTimeout(toastOpenTimer);
            window.clearTimeout(toastCloseTimer);
            toastModal.classList.add("opacity-0");
            toastProgress.classList.remove("animate-progress");

            toastMessage.innerHTML = message;

            toastOpenTimer = setTimeout(() => {
                toastModal.classList.remove("opacity-0");
                toastProgress.classList.add("animate-progress");
            }, 100);

            toastCloseTimer = setTimeout(() => {
                toastModal.classList.add("opacity-0");
                toastProgress.classList.remove("animate-progress");
            }, 3000)
        }

        // Show toast if success message exists
        if (successMessage) {
            showToast(successMessage);
        }

        function openDeleteModal(idToDelete, titleToDelete) {
            itemIdToDelete = idToDelete;
            itemTitleToDelete = titleToDelete;
            document.getElementById('contentTitle').innerHTML = itemTitleToDelete;
            document.getElementById("deleteModal").classList.replace("hidden", "flex");
        }

        function closeDeleteModal() {
            document.getElementById("deleteModal").classList.replace("flex", "hidden");
            itemTitleToDelete = null;
        }

        function confirmDelete() {
            window.location.href = '/admin/product/delete/' + itemIdToDelete;
        }

        // Event listener for image click
        document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
            thumbnailContainer.addEventListener("click", async (e) => {
                // console.log(thumbnailContainer.firstElementChild.dataset.product);
                let data = JSON.parse(thumbnailContainer.firstElementChild.dataset.product);

                document.getElementById('product-detail-container').classList.replace("hidden", "flex");
                document.getElementById('product-list-container').classList.replace("grid", "hidden");
                
                document.getElementById('product-detail-image').src = '/galery/content/' + data.image;
                document.getElementById('product-detail-title').innerHTML = data.title;

                document.getElementById('product-detail-description').innerHTML = (data.description.replace('&nbsp;', ' ')).replace(/\u00A0/g, ' ');

                let variants = data.variant_list;
                document.getElementById('product-detail-category').classList.remove('bg-[#6eb43c]','border-[#8acf59]', 'bg-[#5170FF]', 'border-[#7d94fa]', 'bg-[#B75FE7]', 'border-[#cc81f5]', 'bg-[#39bbc7]', 'border-[#43D9E7]');
          
                document.getElementById('product-detail-category').innerHTML = data.category == 'toy' ? 'MAINAN' : ('' + data.category).toUpperCase();
                switch (data.category) {
                    case 'toy':
                        document.getElementById('product-detail-category').classList.add('bg-[#6eb43c]', 'border-[#8acf59]');
                        break;
                    case 'hdpe':
                        document.getElementById('product-detail-category').classList.add('bg-[#5170FF]', 'border-[#7d94fa]');
                        break;
                    case 'eva':
                        document.getElementById('product-detail-category').classList.add('bg-[#B75FE7]', 'border-[#cc81f5]');
                        break;
                    case 'xpe':
                        document.getElementById('product-detail-category').classList.add('bg-[#39bbc7]', 'border-[#43D9E7]');
                        break;
                }

                if(variants.length > 0){
                    document.getElementById('product-detail-variant-container').classList.remove('hidden');
                    for (let i = 0; i < variants.length; i++) {
                        let variant = variants[i];
                        let variantContainer = document.createElement('div');
                        variantContainer.classList.add('variant-list','max-w-[35px]', 'h-auto', 'aspect-square', 'rounded-full', 'bg-red-200', 'border-[#f5f5f5]', 'border-[3px]', 'cursor-pointer', 'hover:scale-105', 'transition-transform', 'duration-150', 'ease-in-out');
                        variantContainer.style.backgroundColor = variant.color;
                        variantContainer.setAttribute('data-productVariantId', variant.id);
                        variantContainer.setAttribute('data-productVariantImage', variant.image);
                        variantContainer.setAttribute('data-productVariantTitle', variant.title);
                        variantContainer.setAttribute('data-productVariantColor', variant.color);
                        document.getElementById('variant-select-container').appendChild(variantContainer);
                        if(i == 0){
                            document.getElementById('product-detail-variant-title').innerHTML = "-";
                        }
                    }

                    document.querySelectorAll(".variant-list").forEach(variantList => {
                        variantList.addEventListener("click", async (e) => {
                            let variantTitle = e.target.dataset.productvarianttitle;
                            let variantImage = e.target.dataset.productvariantimage;
                            document.getElementById('product-detail-image').src = '/galery/content/' + variantImage;
                            document.getElementById('product-detail-variant-title').innerHTML = variantTitle;
                        });
                    });
                }else{
                    document.getElementById('product-detail-variant-container').classList.add('hidden');
                }
                document.getElementById('deleteBtn').addEventListener("click", function() {
                    openDeleteModal(data.id, data.title);
                });
                document.getElementById('editBtn').addEventListener("click", function() {
                    location.href = '/admin/product/edit/' + data.id;
                });
            });
        });

        document.getElementById('dropdownButton1').addEventListener('click', function() {
            if (document.getElementById('dropdownMenu1').classList.contains('opacity-100')) {
                document.getElementById('dropdownMenu1').classList.replace('opacity-100', 'opacity-0');
                document.getElementById('dropdownIcon1').classList.remove("rotate-180");
                setTimeout(() => {
                    document.getElementById('dropdownMenu1Container').classList.replace('flex', 'hidden');
                }, 300);
            } else {
                document.getElementById('dropdownMenu1Container').classList.replace('hidden', 'flex');
                setTimeout(() => {
                    document.getElementById('dropdownMenu1').classList.replace('opacity-0', 'opacity-100');
                    document.getElementById('dropdownIcon1').classList.add("rotate-180");
                }, 50);
                
            }
        });

        function filter(category) {
            switch (category){
                case 'hdpe' : 
                    document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
                        let data = JSON.parse(thumbnailContainer.firstElementChild.dataset.product);
                        if(data.category == 'hdpe'){
                            thumbnailContainer.classList.remove('hidden');
                        }else{
                            thumbnailContainer.classList.add('hidden');
                        }
                    })
                    break;
                case 'xpe' : 
                    document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
                        let data = JSON.parse(thumbnailContainer.firstElementChild.dataset.product);
                        if(data.category == 'xpe'){
                            thumbnailContainer.classList.remove('hidden');
                        }else{
                            thumbnailContainer.classList.add('hidden');
                        }
                    })
                    break;
                case 'eva' : 
                    document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
                        let data = JSON.parse(thumbnailContainer.firstElementChild.dataset.product);
                        if(data.category == 'eva'){
                            thumbnailContainer.classList.remove('hidden');
                        }else{
                            thumbnailContainer.classList.add('hidden');
                        }
                    })
                    break;
                case 'toy' : 
                    document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
                        let data = JSON.parse(thumbnailContainer.firstElementChild.dataset.product);
                        if(data.category == 'toy'){
                            thumbnailContainer.classList.remove('hidden');
                        }else{
                            thumbnailContainer.classList.add('hidden');
                        }
                    })
                    break;
                default:
                document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
                        thumbnailContainer.classList.remove('hidden');
                    })
                    break;
            }
            document.getElementById('dropdownButton1').click();
        }
        
    </script>
</body>

</html>
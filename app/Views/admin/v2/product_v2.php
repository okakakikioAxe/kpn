<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <meta name="csrf-header" content="<?= csrf_header() ?>">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" fetchpriority="high"></script>
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
    <style>
    .custom-editor {
        box-sizing: border-box;
        padding: 0px;
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        white-space: pre-wrap;
        word-wrap: break-word;
    }

    /* Font sizes (mapped from Quill's size styles) */
    .custom-editor .ql-size-small {
        font-size: 10px;
    }

    .custom-editor .ql-size-normal {
        font-size: 14px;
    }

    .custom-editor .ql-size-large {
        font-size: 18px;
    }

    .custom-editor .ql-size-huge {
        font-size: 24px;
    }

    /* Text formatting */
    .custom-editor strong,
    .custom-editor b {
        font-weight: bold;
    }

    .custom-editor em,
    .custom-editor i {
        font-style: italic;
    }

    .custom-editor u {
        text-decoration: underline;
    }

    /* Links */
    .custom-editor a {
        color: #06c;
        text-decoration: underline;
    }

    /* Lists */
    .custom-editor ol {
        list-style-type: decimal;
        padding-left: 1.5em;
    }

    .custom-editor ul {
        list-style-type: disc;
        padding-left: 1.5em;
    }

    .custom-editor li {
        margin-bottom: 6px;
    }

    .custom-editor ol,
    .custom-editor ul {
        list-style-position: outside;
        margin-left: 20px;
    }

    .custom-editor [data-list="bullet"] {
        list-style-type: disc;
        padding-left: 2px;
        margin-left: 0;
    }

    /* Optional: Remove bullet for items without data-list */
    .custom-editor li:not([data-list="bullet"]):not([data-list="ordered"]) {
        list-style: none;
    }

    /* Alignment */
    .custom-editor .ql-align-center {
        text-align: center;
    }

    .custom-editor .ql-align-right {
        text-align: right;
    }

    .custom-editor .ql-align-justify {
        text-align: justify;
    }

    /* Images */
    .custom-editor img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 10px auto;
    }

    /* Paragraphs */
    .custom-editor p {
        margin: 0 0 0px;
    }

    .custom-editor .ql-indent-1 {
        margin-left: 3em;
    }

    .custom-editor .ql-indent-2 {
        padding-left: 6em;
    }

    .custom-editor .ql-indent-3 {
        padding-left: 9em;
    }
    </style>
    <style>
    .toggle {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        color: white;
        transition: background-color 0.3s;
    }

    .toggle.active {
        background-color: #4CAF50;
        /* Green */
    }

    .toggle.inactive {
        background-color: #f44336;
        /* Red */
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <link rel="stylesheet" href="/css/button_style.css">
    <link rel="stylesheet" href="/css/text_style.css">
    <link rel="stylesheet" href="/css/custom_font.css">
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar sticky z-5 top-0 h-screen bg-gray-800 text-white p-6 w-64 flex-shrink-0">
            <h1 class="text-xl font-bold">KPN</h1>
            <nav class="mt-5">
                <ul>
                    <li class="py-2"><a href="/admin/galery" class="block px-4 py-2 hover:bg-gray-700">Gallery</a></li>
                    <li class="py-2"><a href="/admin/product"
                            class="block px-4 py-2 hover:bg-gray-700 bg-gray-700 rounded">Produk</a></li>
                    <li class="py-2"><a href="/admin/category"
                            class="block px-4 py-2 hover:bg-gray-700">Kategori</a></li>
                    <li class="py-2"><a href="/admin/change-password" class="block px-4 py-2 hover:bg-gray-700">Ubah
                            Password</a></li>
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

                    <button id="open-create-product-modal" type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Tambah Produk
                    </button>
                </div>

            </header>

            <!-- Scrollable Content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <div id="product-list-container" class="grid grid-cols-6 2xl:grid-cols-12 gap-4">

                </div>
                <div id="product-list-action-buttons" class="gap-4 mb-4 w-full items-center justify-end mt-10 hidden">
                    <button id="cancel-product-list-button"
                        class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition">
                        Cancel
                    </button>
                    <button id="save-product-list-button"
                        class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                        Save
                    </button>
                </div>
                <div id="product-detail-container" class="w-full justify-center hidden bg-white p-10">
                    <div class="flex items-center justify-center max-w-[1400px]">
                        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-[40px]">

                            <div id="left-side-placeholder" class="relative w-full h-auto hidden"></div>
                            <div id="left-side-input" class="relative w-full h-auto">
                                <div class="relative group w-full md:mb-[20px] md:rounded-[15px] overflow-hidden">

                                    <!-- Gambar -->
                                    <img id="image-container" src=""
                                        class="w-full aspect-square object-cover transition-opacity duration-300 group-hover:opacity-80">



                                    <!-- Tombol edit -->
                                    <button id="edit-button" type="button"
                                        class="absolute inset-0 flex items-center justify-center text-white ">
                                        <div
                                            class="w-full h-full aspect-square flex items-center justify-center bg-transparent text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                            <?= view('components/icons/add_image', ['fill' => '#242424', 'class' => 'flex w-full items-center justify-center']) ?>
                                        </div>
                                    </button>

                                    <!-- Input file tersembunyi -->
                                    <input type="file" id="image-input" accept="image/*" class="hidden">
                                </div>
                                <!-- Action buttons: Save and Cancel -->
                                <div id="action-buttons" class="gap-4 mb-4 hidden">
                                    <button id="cancel-button"
                                        class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition">
                                        Cancel
                                    </button>
                                    <button id="save-button"
                                        class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                        Save
                                    </button>
                                </div>

                                <div class="relative w-full mb-[60px]">

                                    <!-- Container Scroll -->
                                    <h2 class="ubuntu-bold text-[18px] mb-5">Product Images</h2>
                                    <div id="scrollContainer" class="w-full ">
                                        <div id="image-list-container"
                                            class="grid grid-cols-4 gap-x-2 gap-y-2 pb-[10px]">
                                            <!-- generate gambar produk disini -->
                                        </div>
                                        <input type="file" id="image-edit-input" accept="image/*" class="hidden">
                                        <div id="image-action-buttons" class="gap-4 mt-4 hidden">
                                            <button id="save-images"
                                                class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                                Save
                                            </button>
                                            <button id="cancel-images"
                                                class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="relative w-full mb-[60px]">

                                    <!-- Container Scroll -->
                                    <h2 class="ubuntu-bold text-[18px] mb-5">Product Variants</h2>
                                    <div class="w-full">
                                        <div id="variant-image-list-container"
                                            class="grid grid-cols-4 gap-x-2 gap-y-2 pb-[10px]">
                                            <!-- generate gambar produk disini -->
                                        </div>
                                        <input type="file" id="variant-image-edit-input" accept="image/*"
                                            class="hidden">
                                        <div id="variant-image-action-buttons" class="gap-4 mt-4 hidden">
                                            <button id="save-variant-images"
                                                class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                                Save
                                            </button>
                                            <button id="cancel-variant-images"
                                                class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="w-full h-full flex items-center flex-col">
                                <div class="w-full p-[20px] md:p-0">
                                    <div class="flex">

                                        <h1 id="product-title"
                                            class="ubuntu-bold text-[28px] text-[#242424] leading-[30px] mb-[20px]">
                                        </h1>
                                        <input id="edit-title-form" type="text" class="hidden open-sans-regular">
                                        <button id="edit-title-button"
                                            class="ml-5 text-blue-500 underline text-sm cursor-pointer">Edit</button>
                                        <button id="save-title-button"
                                            class="ml-5 text-blue-500 underline text-sm cursor-pointer hidden">Simpan</button>
                                        <button id="cancel-title-button"
                                            class="ml-5 text-gray-500 underline text-sm cursor-pointer hidden">Cancel</button>
                                    </div>
                                    <div class="flex">
                                        <span class="roboto-bold text-[16px] text-[#242424] mr-[4px]">Slug: </span>
                                        <p id="product-slug" class="roboto-bold text-[16px] text-[#727272]">
                                        </p>
                                        <input id="edit-slug-form" type="text" class="hidden open-sans-regular">
                                        <button id="edit-slug-button"
                                            class="ml-5 text-blue-500 underline text-sm cursor-pointer">Edit</button>
                                        <button id="confirm-slug-button"
                                            class="ml-5 text-green-500 underline text-sm cursor-pointer">Konfirmasi
                                            Perubahan</button>
                                        <button id="save-slug-button"
                                            class="ml-5 text-blue-500 underline text-sm cursor-pointer hidden">Simpan</button>
                                        <button id="cancel-slug-button"
                                            class="ml-5 text-gray-500 underline text-sm cursor-pointer hidden">Cancel</button>
                                    </div>
                                    <p id="slug-error-message"
                                        class="text-red-500 text-[14px] open-sans-regular hidden">Slug
                                        sudah dipakai</p>

                                    <div id="variant-list-container" class="flex space-x-[10px] mb-[63px] mt-[40px]">
                                        <!-- generate tombol variant disini -->
                                    </div>
                                    <div>
                                        <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">
                                            Spesifikasi</p>
                                        <div class="flex mb-[30px]">
                                            <div id="spec-keys"
                                                class="flex flex-col roboto-regular text-[16px] text-[#242424] ">

                                            </div>
                                            <div id="spec-values"
                                                class="flex flex-col roboto-bold text-[16px] text-[#242424]">

                                            </div>
                                        </div>

                                        <div id="specification-action-buttons" class="gap-4 mt-4 mb-4 hidden">
                                            <button id="save-specification"
                                                class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                                Save
                                            </button>
                                            <button id="cancel-specification"
                                                class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition">
                                                Cancel
                                            </button>
                                        </div>

                                        <!-- Form tambah spesifikasi -->
                                        <div class="flex items-center gap-[10px] mb-[20px]">
                                            <input id="new-key" type="text" placeholder="Nama spesifikasi"
                                                class="border border-gray-300 px-3 py-2 rounded w-[200px]">
                                            <input id="new-value" type="text" placeholder="Isi spesifikasi"
                                                class="border border-gray-300 px-3 py-2 rounded w-[200px]">
                                            <button id="add-spec-btn"
                                                class="bg-blue-500 text-white px-4 py-2 rounded">Tambah</button>
                                        </div>
                                    </div>
                                    <!-- Dropdown ubah Kategori -->
                                    <div class="flex items-center gap-[10px] mb-[20px]">
                                        <label for="category-dropdown" class="text-sm font-medium">Ubah
                                            Kategori:</label>
                                        <select id="category-dropdown" class="border border-gray-300 rounded px-3 py-2">
                                            <!-- options dimasukkan oleh JS -->
                                        </select>
                                    </div>

                                    <div id="category-action-buttons" class="gap-4 mt-4 mb-4 hidden">
                                        <button id="save-category"
                                            class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                            Save
                                        </button>
                                        <button id="cancel-category"
                                            class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition">
                                            Cancel
                                        </button>
                                    </div>

                                </div>
                                <div class=" w-full p-[20px] md:py-[20px] md:px-0">
                                    <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">Deskripsi</p>
                                    <div id="description"
                                        class="open-sans-regular text-[#242424] tracking-wide w-full block custom-editor">
                                    </div>
                                    <div id="editor-container" class="hidden">
                                        <div id="editor"></div>
                                    </div>
                                    <div id="description-edit-buttons" class="gap-4 mt-4 mb-4">
                                        <button id="edit-description"
                                            class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                            Edit
                                        </button>
                                    </div>
                                    <div id="description-action-buttons" class="gap-4 mt-4 mb-4 hidden">
                                        <button id="save-description"
                                            class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                            Save
                                        </button>
                                        <button id="cancel-description"
                                            class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                                <div class=" w-full p-[20px] md:py-[20px] md:px-0 mb-20">
                                    <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">Status:<span
                                            id="current-status"></span></p>
                                    <div class="toggle-wrapper">
                                        <button id="toggleButton" class="toggle inactive">Inactive</button>
                                    </div>
                                </div>

                                <div class="delete-wrapper flex w-full items-center justify-start">
                                    <button id="delete-button"
                                        class="px-5 py-3 bg-red-500 text-white rounded-[8px] cursor-pointer">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Edit Variant -->
                    <div id="variant-modal" class="hidden fixed inset-0 bg-black/40 z-50 items-center justify-center">
                        <div class="flex w-full h-full items-center justify-center">
                            <div class="bg-white rounded-xl p-6 w-[90%] max-w-[400px] shadow-lg">
                                <h2 class="text-xl font-bold mb-4">Edit Varian</h2>

                                <!-- Input Judul -->
                                <label class="block text-sm font-medium mb-1" for="variant-title">Judul Varian</label>
                                <input type="text" id="variant-title"
                                    class="w-full border rounded px-3 py-2 mb-4 text-sm" placeholder="Contoh: Biru" />

                                <!-- Input Warna -->
                                <label class="block text-sm font-medium mb-1" for="variant-color">Warna Tombol</label>
                                <input type="color" id="variant-color"
                                    class="w-[60px] h-[40px] mb-4 rounded overflow-hidden border" />

                                <!-- Upload Gambar -->
                                <label class="block text-sm font-medium mb-1">Gambar Varian</label>
                                <div class="relative mb-4 aspect-square bg-gray-100 border rounded overflow-hidden">
                                    <img id="variant-image-preview" src="" class="w-full h-full object-cover" />
                                    <input type="file" id="variant-image-input" accept="image/*"
                                        class="absolute inset-0 opacity-0 cursor-pointer" />
                                </div>

                                <!-- Aksi -->
                                <div class="flex justify-end gap-3">
                                    <button type="button" id="variant-cancel"
                                        class="bg-gray-400 text-white px-4 py-2 rounded">Batal</button>
                                    <button type="button" id="variant-save"
                                        class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="deleteModal"
                    class="fixed inset-0 z-80 items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
                        <h2 class="text-lg font-semibold text-gray-800">Hapus produk ini?</h2>
                        <p id="contentTitle" class="text-gray-600 mt-2"></p>

                        <div class="flex justify-end mt-4">
                            <button onclick="closeDeleteModal()"
                                class="px-4 py-2 cursor-pointer text-gray-600 border border-gray-300 rounded hover:bg-gray-100">Cancel</button>
                            <button onclick="confirmDelete()"
                                class="px-4 py-2 cursor-pointer ml-2 text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                        </div>
                    </div>
                </div>
                <div id="toastModal"
                    class="fixed z-15 bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg flex flex-col items-center opacity-0 transition-opacity duration-500">
                    <span id="toastMessage"></span>
                    <div class='w-full h-1 bg-green-700 mt-2 relative overflow-hidden'>
                        <div id="toastProgress" class='h-full bg-white w-full absolute left-0'></div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    size: []
                }],
                ['bold', 'italic', 'underline'],
                ['link'],
                [{
                    list: 'ordered'
                }, {
                    list: 'bullet'
                }],
                [{
                    align: []
                }],
                ['image'] // tombol image ditambahkan di sini
            ]
        }
    });
    </script>

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

    // dropdown category
    const dropdown = document.getElementById("category-dropdown");
    const actionCategoryButtons = document.getElementById("category-action-buttons");
    const saveCategoryBtn = document.getElementById("save-category");
    const cancelCategoryBtn = document.getElementById("cancel-category");
    let data = null;


    let toastOpenTimer;
    let toastCloseTimer;

    let itemTitleToDelete = null;
    let itemIdToDelete = null;

    let imageThumbnailBlob = null;
    let isNewProduct = false;

    // sort product list =============================================
    const productListContainer = document.getElementById("product-list-container");
    const productListActionButtons = document.getElementById("product-list-action-buttons");
    const saveProductListButton = document.getElementById("save-product-list-button");
    const cancelProductListButton = document.getElementById("cancel-product-list-button");
    let productList = <?= json_encode($products) ?>;
    let categoryList = <?= json_encode($categories) ?>;
    let productListOrder = productList.map(v => '/images/products/' + v.slug +
        '/' + v.image);
    let originalProductListOrder = [];

    function checkProductListChange() {
        const changed = originalProductListOrder.length !== productListOrder.length ||
            originalProductListOrder.some((img, i) => img !== productListOrder[i]);
        if (changed) {
            productListActionButtons.classList.remove('hidden');
        } else {
            productListActionButtons.classList.add('hidden');
        }
    }

    function createProductThumbnail(product) {
        const div = document.createElement('div');
        div.className =
            'thumbnail-container w-full relative cursor-pointer aspect-square hover:scale-105 transform duration-200 ease-in-out';
        div.dataset.id = product.id;

        const img = document.createElement('img');
        img.loading = 'lazy';
        img.dataset.product = JSON.stringify(product);
        img.src = `/images/products/${product.slug}/${product.thumbnail}`;
        img.alt = product.title;
        img.className = 'thumbnail rounded-lg shadow-lg hover:shadow-xl transition relative object-cover w-full h-full';

        const statusDiv = document.createElement('div');
        statusDiv.className =
            `absolute w-[20px] h-[20px] rounded-[5px] ${product.status == 1 ? 'bg-green-500' : 'bg-red-500'} z-60 top-[5px] right-[5px]`;

        div.appendChild(img);
        div.appendChild(statusDiv);
        return div;
    }

    // Render thumbnails and store original order
    productList.forEach(product => {
        const el = createProductThumbnail(product);
        productListContainer.appendChild(el);
        originalProductListOrder.push(product.id.toString());
    });

    // Enable sorting
    const sortable = new Sortable(productListContainer, {
        animation: 150,
        onEnd: () => {
            productListActionButtons.classList.remove("hidden");
        }
    });

    // Save order
    saveProductListButton.addEventListener("click", async () => {
        const newOrder = [...productListContainer.children].map(el => el.dataset.id);
        const payload = {
            products: JSON.stringify({
                order: newOrder
            })
        };

        try {
            const result = await sendApiWithCsrf(
                '/admin/product/save-product-sort-order',
                payload);
            if (result.success) {
                // alert('sorted');
                productListActionButtons.classList.add("hidden");
                console.log(result);
            } else {
                alert("Failed: " + result.message);
            }
        } catch (err) {
            console.error("Error saving:", err);
        }
        // fetch("/product/update-order", {
        //     method: "POST",
        //     headers: {
        //         "Content-Type": "application/json",
        //         "X-Requested-With": "XMLHttpRequest"
        //     },
        //     body: JSON.stringify({ order: newOrder })
        // })
        // .then(res => res.json())
        // .then(data => {
        //     alert("Urutan berhasil disimpan.");
        //     sortButtons.classList.add("hidden");
        // })
        // .catch(err => {
        //     alert("Gagal menyimpan urutan.");
        // });


    });

    // Cancel sort
    cancelProductListButton.addEventListener("click", () => {
        const currentItems = Array.from(productListContainer.children);
        productListContainer.innerHTML = "";

        originalProductListOrder.forEach(id => {
            const item = currentItems.find(el => el.dataset.id === id);
            if (item) productListContainer.appendChild(item);
        });

        productListActionButtons.classList.add("hidden");
    });


    // end sort product list =============================================

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

    function closeProductDetail() {
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


    function changeImage(imageUrl) {
        document.getElementById('image-container').src = imageUrl;
    }

    document.getElementById('open-create-product-modal').addEventListener('click', async (e) => {
        isNewProduct = true;
        try {
            const result = await sendApiWithCsrf(
                '/admin/product/get-new-product', {});
            if (result.success) {
                data = result.product;
            } else {
                alert("Failed: " + result.message);
            }
        } catch (err) {
            console.error("Error saving:", err);
        }

        productEditor(e).catch(err => console.error(err));
        // alert("ok")
    });

    // Event listener for image click
    document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
        thumbnailContainer.addEventListener("click", async (e) => {
            data = JSON.parse(thumbnailContainer.firstElementChild.dataset.product);
            isNewProduct = false;
            productEditor(e).catch(err => console.error(err));
        });
    });

    // Product logic ==================================
    async function productEditor(e) {

        document.getElementById('product-detail-container').classList.replace("hidden", "flex");
        document.getElementById('product-list-container').classList.replace("grid", "hidden");

        const imageContainer = document.getElementById('image-container');
        const variantListContainer = document.getElementById('variant-list-container');

        const imageListContainer = document.getElementById('image-list-container');
        const imageEditInput = document.getElementById('image-edit-input');
        const imageActionButtons = document.getElementById('image-action-buttons');
        const saveImagesBtn = document.getElementById('save-images');
        const cancelImagesBtn = document.getElementById('cancel-images');

        const titleContainer = document.getElementById('product-title');
        const editTitleForm = document.getElementById('edit-title-form');
        const editTitleBtn = document.getElementById('edit-title-button');
        const saveTitleBtn = document.getElementById('save-title-button');
        const cancelTitleBtn = document.getElementById('cancel-title-button');
        let title = data.title;
        let originalTitle = title;

        const slugContainer = document.getElementById('product-slug');
        const editSlugForm = document.getElementById('edit-slug-form');
        const editSlugBtn = document.getElementById('edit-slug-button');
        const saveSlugBtn = document.getElementById('save-slug-button');
        const confirmSlugBtn = document.getElementById('confirm-slug-button');
        const slugErrorMessage = document.getElementById('slug-error-message');
        const cancelSlugBtn = document.getElementById('cancel-slug-button');
        let slug = data.slug;
        let originalSlug = slug;


        const description = document.getElementById('description');
        const editorContainer = document.getElementById('editor-container');
        const editor = document.getElementById('editor');
        const descriptionActionButton = document.getElementById('description-action-buttons');
        const descriptionEditButton = document.getElementById('description-edit-buttons');
        const editDescription = document.getElementById('edit-description');
        const saveDescription = document.getElementById('save-description');
        const cancelDescription = document.getElementById('cancel-description');

        const variantImageListContainer = document.getElementById(
            'variant-image-list-container');
        const variantImageEditInput = document.getElementById('variant-image-edit-input');
        const variantImageActionButtons = document.getElementById(
            'variant-image-action-buttons');
        const saveVariantImagesBtn = document.getElementById('save-variant-images');
        const cancelVariantImagesBtn = document.getElementById('cancel-variant-images');
        const specActionButtons = document.getElementById('specification-action-buttons');
        const saveSpecBtn = document.getElementById('save-specification');
        const cancelSpecBtn = document.getElementById('cancel-specification');
        const deleteBtn = document.getElementById('delete-button');




        let descriptionContent = data.description;
        let originalDescriptionContent = descriptionContent;

        // check if its a new product
        if (data.status == 3 && data.created_at == null) {
            // sembunyikan form upload gambar
            document.getElementById('left-side-placeholder').classList.remove('hidden');
            document.getElementById('left-side-input').classList.add('hidden');
        } else {
            document.getElementById('left-side-placeholder').classList.add('hidden');
            document.getElementById('left-side-input').classList.remove('hidden');
        }
        // end checking

        // delete button
        deleteBtn.addEventListener('click', async () => {

            const confirmed = confirm(
                `Yakin ingin mengubah menghapus produk: ${data.title}?`);

            if (confirmed) {

                const payload = {
                    product_id: data.id
                };

                try {
                    const result = await sendApiWithCsrf(
                        '/admin/product/delete-product',
                        payload);
                    if (result.success) {
                        window.location.href = '/admin/product';
                    } else {
                        alert("Failed: " + result.message);
                    }
                } catch (err) {
                    console.error("Error saving:", err);
                }
            }
        });
        // end delete button

        // title =========================
        function renderTitle() {
            title = originalTitle;
            titleContainer.textContent = '';
            titleContainer.textContent = title;
            editTitleForm.value = title;
        }

        editTitleBtn.addEventListener('click', function() {
            editTitleBtn.classList.add('hidden');
            titleContainer.classList.add('hidden');
            saveTitleBtn.classList.remove('hidden');
            cancelTitleBtn.classList.remove('hidden');
            editTitleForm.classList.remove('hidden');
            editTitleForm.focus();
        });

        saveTitleBtn.addEventListener('click', async function() {
            const payload = {
                product_id: data.id,
                title: editTitleForm.value,
            };

            try {
                const result = await sendApiWithCsrf(
                    '/admin/product/save-product-title',
                    payload);
                if (result.success) {
                    originalTitle = editTitleForm.value;
                    editTitleBtn.classList.remove('hidden');
                    titleContainer.classList.remove('hidden');
                    saveTitleBtn.classList.add('hidden');
                    cancelTitleBtn.classList.add('hidden');
                    editTitleForm.classList.add('hidden');
                    renderTitle();
                } else {
                    alert("Failed: " + result.message);
                }
            } catch (err) {
                console.error("Error saving:", err);
            }

        });


        cancelTitleBtn.addEventListener('click', function() {
            editTitleBtn.classList.remove('hidden');
            titleContainer.classList.remove('hidden');
            saveTitleBtn.classList.add('hidden');
            cancelTitleBtn.classList.add('hidden');
            editTitleForm.classList.add('hidden');
            renderTitle();
        });

        renderTitle();
        // end of title ==================

        // Slug =========================
        async function renderSlug() {
            slug = originalSlug;
            slugContainer.textContent = '';
            slugContainer.textContent = slug;
            editSlugForm.value = slug;
            if (data.status != 3) {
                editSlugBtn.classList.add('hidden');
            }
            if (slug != 'new-slug' && data.status == 3) {
                let isSlugReady = await isSlugAvailable(slug);
                if (isSlugReady) {
                    confirmSlugBtn.classList.remove('hidden');
                    slugErrorMessage.classList.add('hidden');
                } else {
                    slugErrorMessage.classList.remove('hidden');
                    confirmSlugBtn.classList.add('hidden');
                }

            } else {
                confirmSlugBtn.classList.add('hidden');
                slugErrorMessage.classList.add('hidden');
            }
        }

        async function isSlugAvailable(inputSlug) {
            try {
                const result = await sendApiWithCsrf(
                    '/admin/product/check-available-slug', {
                        'slug': inputSlug
                    });
                return result.success;
            } catch (err) {
                console.error("Error saving:", err);
            }
        }

        confirmSlugBtn.addEventListener('click', async () => {
            const confirmed = confirm(
                `Yakin ingin menyimpan slug ini, anda tidak dapat membatalkannya`);

            if (confirmed) {
                const payload = {
                    product_id: data.id,
                    slug: originalSlug,
                };

                try {
                    const result = await sendApiWithCsrf(
                        '/admin/product/confirm-slug',
                        payload);
                    if (result.success) {
                        alert("Slug berhasil disimpan");
                        data = result.product;
                        document.getElementById('left-side-placeholder').classList.add('hidden');
                        document.getElementById('left-side-input').classList.remove('hidden');
                        // document.getElementById('slug-error-message')?.remove();
                        // document.getElementById('confirm-slug-button')?.remove();
                        slugErrorMessage.classList.add('hidden');
                        confirmSlugBtn.classList.add('hidden');
                        editSlugBtn.classList.add('hidden');
                        isNewProduct = false;
                        document.getElementById('left-side-placeholder').classList.add('hidden');
                        document.getElementById('left-side-input').classList.remove('hidden');

                    } else {
                        alert("Failed: " + result.message);
                    }
                } catch (err) {
                    console.error("Error saving:", err);
                }

            } else {
                console.log('Perubahan status dibatalkan');
            }
        });

        editSlugForm.addEventListener('input', function(e) {
            let value = e.target.value;

            value = value
                .toLowerCase() // convert to lowercase
                .replace(/\s+/g, '-') // replace spaces with dashes
                .replace(/[^a-z0-9\-]/g, '') // remove special characters (allow a-z, 0-9, -)
                .replace(/-+/g, '-') // prevent multiple dashes

            e.target.value = value;
        });

        editSlugBtn.addEventListener('click', function() {
            confirmSlugBtn.classList.add('hidden');
            editSlugBtn.classList.add('hidden');
            slugContainer.classList.add('hidden');
            saveSlugBtn.classList.remove('hidden');
            cancelSlugBtn.classList.remove('hidden');
            editSlugForm.classList.remove('hidden');
            editSlugForm.focus();
        });

        saveSlugBtn.addEventListener('click', function() {
            originalSlug = editSlugForm.value;
            editSlugBtn.classList.remove('hidden');
            slugContainer.classList.remove('hidden');
            saveSlugBtn.classList.add('hidden');
            cancelSlugBtn.classList.add('hidden');
            editSlugForm.classList.add('hidden');
            renderSlug();
        });


        cancelSlugBtn.addEventListener('click', function() {
            editSlugBtn.classList.remove('hidden');
            slugContainer.classList.remove('hidden');
            saveSlugBtn.classList.add('hidden');
            cancelSlugBtn.classList.add('hidden');
            editSlugForm.classList.add('hidden');
            renderSlug();
        });

        renderSlug();
        // end of Slug ==================

        // togle on/off =================
        const toggleBtn = document.getElementById('toggleButton');
        const statusInfo = document.getElementById('current-status');
        let isActive = data.status == 1 ? false : true;

        function renderStatus() {
            toggleBtn.classList.toggle('active', isActive);
            toggleBtn.classList.toggle('inactive', !isActive);
            toggleBtn.textContent = isActive ? 'Aktifkan' : 'Nonaktifkan';
            statusInfo.textContent = !isActive ? 'Aktif' : 'Nonaktif';
            statusInfo.classList.remove('text-red-500', 'text-green-500');
            statusInfo.classList.add(isActive ? 'text-red-500' : 'text-green-500');
        }

        renderStatus();

        toggleBtn.addEventListener('click', async () => {
            const isCurrentlyActive = toggleBtn.classList.contains('active');
            const nextState = isCurrentlyActive ? 'Active' : 'Inactive';

            const confirmed = confirm(
                `Yakin ingin mengubah status menjadi ${nextState}?`);

            if (confirmed) {
                const payload = {
                    product_id: data.id,
                    status: isActive == false ? 0 : 1,
                };

                try {
                    const result = await sendApiWithCsrf(
                        '/admin/product/save-product-status',
                        payload);
                    if (result.success) {
                        isActive = !isCurrentlyActive;
                        renderStatus();
                    } else {
                        alert("Failed: " + result.message);
                    }
                } catch (err) {
                    console.error("Error saving:", err);
                }

            } else {
                console.log('Perubahan status dibatalkan');
            }
        });
        // end of togle on/off ==========

        // description ===================
        function renderDescription() {
            description.innerHTML = '';
            description.innerHTML = originalDescriptionContent;

        }

        editDescription.addEventListener('click', () => {
            descriptionEditButton.classList.add('hidden');
            descriptionActionButton.classList.remove('hidden');
            description.classList.add('hidden');
            editorContainer.classList.remove('hidden');
            quill.clipboard.dangerouslyPasteHTML(originalDescriptionContent);
        });

        saveDescription.addEventListener('click', async () => {
            const quillContentHtml = quill.root.innerHTML;
            descriptionContent = quillContentHtml;

            const payload = {
                product_id: data.id,
                description: descriptionContent
            };

            try {
                const result = await sendApiWithCsrf(
                    '/admin/product/save-product-description',
                    payload);
                if (result.success) {
                    alert("Saved!");
                    originalDescriptionContent = descriptionContent;
                    descriptionEditButton.classList.remove('hidden');
                    descriptionActionButton.classList.add('hidden');
                    description.classList.remove('hidden');
                    editorContainer.classList.add('hidden');
                    renderDescription();
                } else {
                    alert("Failed: " + result.message);
                }
            } catch (err) {
                console.error("Error saving:", err);
            }


        });

        cancelDescription.addEventListener('click', () => {
            descriptionContent = originalDescriptionContent;
            descriptionEditButton.classList.remove('hidden');
            descriptionActionButton.classList.add('hidden');
            description.classList.remove('hidden');
            editorContainer.classList.add('hidden');
            renderDescription();
        });



        renderDescription();
        // end of descriptiopn ===========

        // spec ==========================
        let productSpec = data.specs ? JSON.parse(data.specs) : {};
        let originalProductSpec = {
            ...productSpec
        };

        function renderSpec() {
            const keyContainer = document.getElementById('spec-keys');
            const valueContainer = document.getElementById('spec-values');

            keyContainer.innerHTML = '';
            valueContainer.innerHTML = '';

            for (const [key, value] of Object.entries(productSpec)) {
                const formattedKey = key.replace(/_/g, ' ')
                    .replace(/\b\w/g, char => char.toUpperCase());

                const keyDiv = document.createElement('div');
                keyDiv.className = 'py-[4px] border-b-1 border-b-[#CCCCCC]';
                keyDiv.innerHTML = `<p>${formattedKey}</p>`;
                keyContainer.appendChild(keyDiv);

                const valueDiv = document.createElement('div');
                valueDiv.className =
                    'py-[4px] border-b-1 border-b-[#CCCCCC] pl-[50px] pr-[40px] flex items-center gap-[10px]';

                const valueText = document.createElement('span');
                valueText.textContent = value;

                const input = document.createElement('input');
                input.type = 'text';
                input.value = value;
                input.className = 'border rounded px-2 py-1 hidden w-full';

                const editButton = document.createElement('button');
                editButton.textContent = 'Edit';
                editButton.className = 'ml-5 text-blue-500 underline text-sm cursor-pointer';

                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Delete';
                deleteButton.className = 'text-red-500 underline text-sm cursor-pointer';

                editButton.addEventListener('click', () => {
                    if (editButton.textContent === 'Edit') {
                        valueText.classList.add('hidden');
                        input.classList.remove('hidden');
                        editButton.textContent = 'Simpan';
                    } else {
                        const newValue = input.value.trim();
                        productSpec[key] = newValue;
                        specActionButtons.classList.remove('hidden')
                        renderSpec(); // re-render semua

                    }
                });

                deleteButton.addEventListener('click', () => {
                    delete productSpec[key];
                    specActionButtons.classList.remove('hidden')
                    renderSpec(); // re-render semua
                });

                valueDiv.appendChild(valueText);
                valueDiv.appendChild(input);
                valueDiv.appendChild(editButton);
                valueDiv.appendChild(deleteButton);

                valueContainer.appendChild(valueDiv);
            }
        }

        saveSpecBtn.addEventListener('click', async () => {



            const payload = {
                product_id: data.id,
                slug: data.slug,
                specs: JSON.stringify(productSpec)
            };

            try {
                const result = await sendApiWithCsrf(
                    '/admin/product/save-product-specification',
                    payload);
                if (result.success) {
                    alert("Saved!");
                    // console.log(result);
                    originalProductSpec = {
                        ...productSpec
                    };
                    renderSpec();
                } else {
                    alert("Failed: " + result.message);
                }
            } catch (err) {
                console.error("Error saving:", err);
            }
            specActionButtons.classList.add('hidden');
        });

        cancelSpecBtn.addEventListener('click', () => {
            productSpec = {
                ...originalProductSpec
            };
            renderSpec();
            specActionButtons.classList.add('hidden');
        });

        document.getElementById('add-spec-btn').addEventListener('click', () => {
            const keyInput = document.getElementById('new-key');
            const valueInput = document.getElementById('new-value');

            const rawKey = keyInput.value.trim();
            const rawValue = valueInput.value.trim();

            if (!rawKey || !rawValue) {
                alert('Isi semua kolom terlebih dahulu.');
                return;
            }

            // const normalizedKey = rawKey.replace(/\s+/g, '_');

            if (productSpec.hasOwnProperty(rawKey)) {
                alert('Spesifikasi dengan nama ini sudah ada.');
                return;
            }

            productSpec = {
                ...productSpec,
                [rawKey]: rawValue
            };

            keyInput.value = '';
            valueInput.value = '';
            specActionButtons.classList.remove('hidden');
            renderSpec();
        });

        // Pertama kali render
        renderSpec();
        // end spec =================


        let originalImage = '/images/products/' + data.slug + '/' + data.image;
        imageContainer.src = originalImage;

        imageListContainer.innerHTML = '';
        variantImageListContainer.innerHTML = '';
        variantListContainer.innerHTML = '';

        let imageOrder = data.image_list.map(v => '/images/products/' + data.slug + '/' + v
            .image);
        let variantImageOrder = data.variant_list.map(v => '/images/products/' + data.slug +
            '/' + v.image);

        let editingIndex = null;
        let variantEditingIndex = null;
        let originalImageOrder = [...imageOrder]; // Snapshot awal
        let originalVariantImageOrder = [...variantImageOrder]; // Snapshot awal
        let variantList = [...data.variant_list];
        let originalVariantList = [...data.variant_list];

        function checkImageChange() {
            const changed = originalImageOrder.length !== imageOrder.length ||
                originalImageOrder.some((img, i) => img !== imageOrder[i]);

            if (changed) {
                imageActionButtons.classList.remove('hidden');
            } else {
                imageActionButtons.classList.add('hidden');
            }
        }

        function checkVariantImageChange() {
            const changed = originalVariantImageOrder.length !== variantImageOrder.length ||
                originalVariantImageOrder.some((img, i) => img !== variantImageOrder[i]);

            if (changed) {
                variantImageActionButtons.classList.remove('hidden');
            } else {
                variantImageActionButtons.classList.add('hidden');
            }
        }

        imageEditInput.addEventListener('change', function() {
            // ...
            reader.onload = function(e) {
                if (editingIndex === imageOrder.length) {
                    imageOrder.push(e.target.result);
                } else {
                    imageOrder[editingIndex] = e.target.result;
                }
                renderImageList();
                checkImageChange();
            };
        });


        variantImageEditInput.addEventListener('change', function() {
            // ...
            reader.onload = function(e) {
                if (variantEditingIndex === variantImageOrder.length) {
                    variantImageOrder.push(e.target.result);
                } else {
                    variantImageOrder[variantEditingIndex] = e.target.result;
                }
                renderVariantImageList();
                checkVariantImageChange();
            };
        });

        function renderImageList() {
            imageListContainer.innerHTML = '';
            imageOrder.forEach((src, index) => {
                const btn = document.createElement('button');
                btn.setAttribute('type', 'button');
                btn.dataset.index = index;

                btn.className = "relative";
                btn.innerHTML = `
                            <div class="relative w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-gray-200 rounded-[10px] overflow-hidden shadow lg:shadow-md group transition-transform hover:scale-102 duration-100">
                                <img src="${src}" class="w-full h-full object-cover" />
                                <button class="absolute top-1 left-1 w-[18px] h-[18px] rounded-full bg-white border border-gray-400 hover:bg-red-500 hover:border-red-500 transition-all"
                                    data-action="delete" title="Hapus"></button>
                            </div>
                        `;
                btn.addEventListener('click', () => {
                    editingIndex = index;
                    imageEditInput.click();
                });

                // Tambahkan handler delete
                btn.querySelector('button[data-action="delete"]').addEventListener(
                    'click', (event) => {
                        event.stopPropagation(); // mencegah trigger edit
                        imageOrder.splice(index, 1);
                        renderImageList();
                        checkImageChange();
                    });

                imageListContainer.appendChild(btn);
            });

            // Add Image Button
            const addBtn = document.createElement('button');
            addBtn.setAttribute('type', 'button');
            addBtn.className = "relative";
            addBtn.innerHTML = `
                        <div class="w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-white border border-dashed border-gray-400 rounded-[10px] flex justify-center items-center text-gray-400 hover:text-black cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                    `;
            addBtn.addEventListener('click', () => {
                editingIndex = imageOrder.length;
                imageEditInput.click();
            });

            imageListContainer.appendChild(addBtn);
            checkImageChange();
        }


        function renderVariantImageList() {
            variantImageListContainer.innerHTML = '';
            variantImageOrder.forEach((src, index) => {
                const btn = document.createElement('button');
                btn.setAttribute('type', 'button');
                btn.dataset.index = index;

                btn.className = "relative";
                btn.innerHTML = `
                            <div class="relative w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-gray-200 rounded-[10px] overflow-hidden shadow lg:shadow-md group transition-transform hover:scale-102 duration-100">
                                <img src="${src}" class="w-full h-full object-cover" />
                                <button class="absolute top-1 left-1 w-[18px] h-[18px] rounded-full bg-white border border-gray-400 hover:bg-red-500 hover:border-red-500 transition-all"
                                    data-action="delete" title="Hapus"></button>
                            </div>
                        `;
                btn.addEventListener('click', () => {
                    // variantEditingIndex = index;
                    // variantImageEditInput.click();
                    openVariantModal(index);
                });

                // Tambahkan handler delete
                btn.querySelector('button[data-action="delete"]').addEventListener(
                    'click', (event) => {
                        event.stopPropagation(); // mencegah trigger edit
                        variantImageOrder.splice(index, 1);
                        variantList.splice(index, 1);
                        renderVariantImageList();
                        checkVariantImageChange();
                    });

                variantImageListContainer.appendChild(btn);
            });

            // Add Image Button
            const addBtn = document.createElement('button');
            addBtn.setAttribute('type', 'button');
            addBtn.className = "relative";
            addBtn.innerHTML = `
                        <div class="w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-white border border-dashed border-gray-400 rounded-[10px] flex justify-center items-center text-gray-400 hover:text-black cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                    `;
            addBtn.addEventListener('click', () => {
                // variantEditingIndex = imageOrder.length;
                // variantImageEditInput.click();
                openCreateVariantModal();
            });

            variantImageListContainer.appendChild(addBtn);
            checkVariantImageChange();
            renderVariantList();
            renderVariantButton();
        }

        function renderVariantList() {
            variantList.forEach((variant, index) => {
                if (variant.image.startsWith('data:image/')) {
                    variant.image = variantList[index].image;
                    // variant.image = ``;
                } else {
                    const filenameWithExtension = variant.image.split(/[/\\]/)
                        .pop();

                    variant.image = '/images/products/' + data.slug + '/' +
                        filenameWithExtension;

                }
            });

            variantList.sort((a, b) => {
                return variantImageOrder.indexOf(a.image) -
                    variantImageOrder.indexOf(b.image);
            });
        }

        // File upload logic
        imageEditInput.addEventListener('change', function() {
            const file = this.files[0];
            if (!file || !file.type.startsWith('image/')) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                if (editingIndex === imageOrder.length) {
                    imageOrder.push(e.target.result);
                } else {
                    imageOrder[editingIndex] = e.target.result;
                }
                renderImageList();
            };
            reader.readAsDataURL(file);
            this.value = '';
        });

        // File upload logic
        variantImageEditInput.addEventListener('change', function() {
            const file = this.files[0];
            if (!file || !file.type.startsWith('image/')) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                if (variantEditingIndex === variantImageOrder.length) {
                    variantImageOrder.push(e.target.result);
                } else {
                    variantImageOrder[variantEditingIndex] = e.target.result;
                }
                renderImageList();
            };
            reader.readAsDataURL(file);
            this.value = '';
        });

        // Sortable logic
        new Sortable(imageListContainer, {
            animation: 150,
            draggable: 'button:not(:last-child)',
            onEnd: function(evt) {
                if (evt.oldIndex === evt.newIndex) return;
                const moved = imageOrder.splice(evt.oldIndex, 1)[0];
                imageOrder.splice(evt.newIndex, 0, moved);
                renderImageList();
                checkImageChange();
            }
        });


        // Sortable logic
        new Sortable(variantImageListContainer, {
            animation: 150,
            draggable: 'button:not(:last-child)',
            onEnd: function(evt) {
                if (evt.oldIndex === evt.newIndex) return;
                const moved = variantImageOrder.splice(evt.oldIndex, 1)[0];
                variantImageOrder.splice(evt.newIndex, 0, moved);
                renderVariantImageList();
                checkVariantImageChange();
            }
        });

        // Render for the first time
        renderImageList();
        renderVariantImageList();

        function renderVariantButton() {
            variantListContainer.innerHTML = '';
            // Render variant buttons (warna)
            variantList.forEach(variant => {
                const variantButton = document.createElement('button');
                variantButton.setAttribute('type', 'button');
                variantButton.innerHTML = `
                            <div class="rounded-full h-[30px] w-[30px] transition-transform hover:scale-102 duration-100"
                                style="box-shadow: 1px 2px 4px 2px rgba(94, 94, 94, 0.15);background-color:${variant.color};">
                            </div>
                        `;
                // variantButton.addEventListener('click', () => {
                //     imageContainer.src = '/images/products/' + data.slug + '/' +
                //         variant.image;
                // });

                variantListContainer.appendChild(variantButton);
            });
        }


        saveImagesBtn.addEventListener('click', async () => {

            const imagesToSave = imageOrder.map((src) => {
                return {
                    src: src,
                    is_new: src.startsWith('data:image/')
                };
            });
            const payload = {
                product_id: data.id,
                slug: data.slug,
                images: imagesToSave
            };

            try {
                const result = await sendApiWithCsrf(
                    '/admin/product/save-product-image',
                    payload);
                if (result.success) {
                    alert("Saved!");
                    originalImageOrder = [...imageOrder];
                    checkImageChange();
                } else {
                    alert("Failed: " + result.message);
                }
            } catch (err) {
                console.error("Error saving:", err);
            }
        });


        saveVariantImagesBtn.addEventListener('click', async () => {
            console.log("Saved image order:", variantImageOrder);
            variantList.forEach((variant, index) => {
                if (variant.image.startsWith('data:image/')) {
                    variant.image = variantList[index].image;
                    // variant.image = ``;
                } else {
                    const filenameWithExtension = variant.image
                        .split(
                            /[/\\]/)
                        .pop();

                    variant.image = '/images/products/' + data
                        .slug + '/' +
                        filenameWithExtension;

                }
            });

            variantList.sort((a, b) => {
                return variantImageOrder.indexOf(a.image) -
                    variantImageOrder.indexOf(b.image);
            });

            const payload = {
                product_id: data.id,
                slug: data.slug,
                images: variantList
            };

            try {
                const result = await sendApiWithCsrf(
                    '/admin/product/save-product-variant',
                    payload);
                if (result.success) {
                    alert("Saved!");
                    data.variant_list = result.variants;
                    originalVariantImageOrder = [...result.files];
                    originalVariantList = [...data.variant_list];
                    variantList = [...data.variant_list]

                    variantImageOrder = data.variant_list.map(v =>
                        '/images/products/' + data.slug +
                        '/' + v.image);
                    originalVariantImageOrder = [...variantImageOrder];
                    console.log(variantImageOrder);
                    checkVariantImageChange();
                } else {
                    alert("Failed: " + result.message);
                }
            } catch (err) {
                console.error("Error saving:", err);
            }
        });

        cancelImagesBtn.addEventListener('click', () => {
            imageOrder = [...originalImageOrder];
            renderImageList();
            checkImageChange();
        });

        cancelVariantImagesBtn.addEventListener('click', () => {
            variantImageOrder = [...originalVariantImageOrder];
            variantList = [...originalVariantList];
            data.variant_list = [...originalVariantList];
            renderVariantImageList();
            checkVariantImageChange();
        });


        let activeVariantIndex = null;

        function openVariantModal(index) {
            const variant = variantList[index];
            activeVariantIndex = index;

            // Isi form dari data yang dipilih
            document.getElementById('variant-title').value = variant.title || '';
            document.getElementById('variant-color').value = variant.color || '#000000';
            // document.getElementById('variant-image-preview').src =
            //     `/images/products/${data.slug}/${variant.image}` || variant.image;
            // Jika base64 (gambar baru), langsung tampilkan

            document.getElementById('variant-image-preview').src = variantImageOrder[index];

            // Tampilkan modal
            document.getElementById('variant-modal').classList.remove('hidden');
        }

        function openCreateVariantModal() {
            const variant = null;
            activeVariantIndex = variantList.length;

            // Isi form dari data yang dipilih
            document.getElementById('variant-title').value = '';
            document.getElementById('variant-color').value = '#000000';
            // document.getElementById('variant-image-preview').src =
            //     `/images/products/${data.slug}/${variant.image}` || variant.image;
            // Jika base64 (gambar baru), langsung tampilkan

            document.getElementById('variant-image-preview').src = '';

            // Tampilkan modal
            document.getElementById('variant-modal').classList.remove('hidden');
        }

        // Tutup modal
        document.getElementById('variant-cancel').addEventListener('click', () => {
            document.getElementById('variant-modal').classList.add('hidden');
        });

        // Ganti gambar preview saat upload
        document.getElementById('variant-image-input').addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('variant-image-preview').src = event
                        .target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('variant-save').addEventListener('click', () => {
            if (activeVariantIndex === null) return;

            const title = document.getElementById('variant-title').value.trim();
            const color = document.getElementById('variant-color').value;
            const preview = document.getElementById('variant-image-preview').src;
            const fileInput = document.getElementById('variant-image-input');
            const file = fileInput.files[0];

            // cek apakah ini gambar baru
            if (activeVariantIndex == variantList.length) {
                // jika baru
                const variant = {
                    'id': null,
                    'product_id': '',
                    'image': '',
                    'title': '',
                    'color': '',
                    'order': ''
                };
                variant.product_id = data.id;
                variant.title = title;
                variant.color = color;
                variant.image = preview;
                variant.is_new = true;
                variant.file = file; // simpan file asli untuk upload saat save

                variantImageOrder.push(preview);
                variant.is_changed = true;

                variantList.push(variant);
            } else {
                // jika lama
                const variant = variantList[activeVariantIndex];

                variant.title = title;
                variant.color = color;

                // Jika user memilih gambar baru
                if (file) {
                    // Tandai bahwa ini gambar baru
                    // const filenameWithExtension = preview.split(/[/\\]/).pop();
                    variantImageOrder[activeVariantIndex] = preview;
                    variant.image = preview; // pakai base64 sementara
                    variant.is_new = true;
                    variant.file = file; // simpan file asli untuk upload saat save
                } else {
                    variant.is_new = false;
                }

                variant.is_changed = true;

                // 

                variantList[activeVariantIndex] = variant;

            }
            // Tutup modal
            document.getElementById('variant-modal').classList.add('hidden');

            // Clear input file
            fileInput.value = '';


            renderVariantImageList();
            variantImageActionButtons.classList.remove('hidden');
        });


        const imageInput = document.getElementById('image-input');
        const placeholder = document.getElementById('placeholder');
        const editButton = document.getElementById('edit-button');
        const actionButtons = document.getElementById('action-buttons');
        const saveButton = document.getElementById('save-button');
        const cancelButton = document.getElementById('cancel-button');

        let lastImageURL = ''; // to store temporary image src

        // Klik tombol edit
        editButton.addEventListener('click', () => {
            imageInput.click();
        });

        // Saat file dipilih
        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    lastImageURL = e.target.result;
                    imageContainer.src = lastImageURL;

                    const img = new Image();
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');

                        // Ukuran thumbnail yang diinginkan
                        const maxWidth = 450;
                        const maxHeight = 450;

                        let width = img.width;
                        let height = img.height;

                        // Resize proporsional
                        if (width > height) {
                            if (width > maxWidth) {
                                height *= maxWidth / width;
                                width = maxWidth;
                            }
                        } else {
                            if (height > maxHeight) {
                                width *= maxHeight / height;
                                height = maxHeight;
                            }
                        }

                        canvas.width = width;
                        canvas.height = height;
                        ctx.drawImage(img, 0, 0, width, height);

                        // Data URL thumbnail
                        imageThumbnailBlob = canvas.toDataURL('image/webp',
                            0.8); // 0.8 = kualitas

                        // Kirim thumbnailDataURL ke backend jika perlu
                        // console.log("Thumbnail ready:", thumbnailDataURL);
                    };
                    img.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
            actionButtons.classList.remove('hidden');
        });

        // Save
        saveButton.addEventListener('click', async () => {
            // const payload = {
            //     product_id: data.id,
            //     slug: data.slug,
            //     image: imageInput.files[0],
            //     thumbnail: imageThumbnailBlob
            // };

            const payload = new FormData();
            payload.append('product_id', data.id);
            payload.append('slug', data.slug);
            payload.append('image', imageInput.files[0]);
            payload.append('thumbnail', imageThumbnailBlob);
            // console.log(payload);
            try {
                const result = await sendFormDataApiWithCsrf(
                    '/admin/product/save-product-cover',
                    payload);
                if (result.success) {
                    alert("Saved!");
                    console.log(result);
                    // originalImage = new_image_url_from_BE
                    // checkVariantImageChange();
                } else {
                    alert("Failed: " + result.message);
                }
            } catch (err) {
                console.error("Error saving:", err);
            }
            // save image to database

            actionButtons.classList.add('hidden');
        });

        // Cancel
        cancelButton.addEventListener('click', () => {
            console.log('Cancel clicked. Resetting image.');

            // Reset everything
            imageContainer.src = originalImage;
            actionButtons.classList.add('hidden');
            imageInput.value = ''; // clear file input
            lastImageURL = '';
        });

        let category_list = categoryList;


        // Set default value
        let defaultCategoryId = category_list.find(cat => cat.slug === data.category)?.id || category_list[0].id;

        // Populate dropdown
        category_list.forEach(cat => {
            const option = document.createElement("option");
            option.value = cat.id;
            option.textContent = cat.title;
            dropdown.appendChild(option);
        });

        // Set default selected
        dropdown.value = defaultCategoryId;

        // Tampilkan tombol saat kategori berubah
        dropdown.addEventListener("change", () => {
            if (dropdown.value != defaultCategoryId) {
                actionCategoryButtons.classList.remove("hidden");
            } else {
                actionCategoryButtons.classList.add("hidden");
            }
        });

        // Tombol Cancel
        cancelCategoryBtn.addEventListener("click", () => {
            dropdown.value = defaultCategoryId;
            actionCategoryButtons.classList.add("hidden");
        });

        // Tombol Save
        saveCategoryBtn.addEventListener("click", async () => {
            const selectedId = dropdown.value;

            const payload = {
                product_id: data.id,
                category_id: selectedId
            };

            try {
                const result = await sendApiWithCsrf(
                    '/admin/product/save-product-category',
                    payload);
                if (result.success) {
                    // alert('sorted');
                    actionCategoryButtons.classList.add("hidden");
                    console.log(result);
                } else {
                    alert("Failed: " + result.message);
                }
            } catch (err) {
                console.error("Error saving:", err);
            }

            // // Kirim data ke backend (atur payload sesuai kebutuhanmu)
            // fetch("/admin/product/update-category", {
            //         method: "POST",
            //         headers: {
            //             "Content-Type": "application/json",
            //             "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')?.getAttribute(
            //                 "content") || ""
            //         },
            //         body: JSON.stringify({
            //             category_id: selectedId,
            //             // ...tambahkan data lain kalau perlu
            //         })
            //     })
            //     .then(response => {
            //         if (!response.ok) throw new Error("Gagal update");
            //         return response.json();
            //     })
            //     .then(data => {
            //         alert("Kategori berhasil diubah!");
            //         defaultCategoryId = selectedId; // Update default
            //         actionCategoryButtons.classList.add("hidden");
            //     })
            //     .catch(error => {
            //         alert("Terjadi kesalahan saat menyimpan.");
            //         console.error(error);
            //     });
        });

    }
    // end of product logic ==========================


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
        console.log("filter");
    }

    async function sendApiWithCsrf(url, data) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const csrfHeader = document.querySelector('meta[name="csrf-header"]').getAttribute('content');

        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                [csrfHeader]: csrfToken,
            },
            body: JSON.stringify(data),
        });

        const result = await response.json();

        // Refresh CSRF token
        const csrfRes = await fetch('/api/csrf-token');
        const csrfData = await csrfRes.json();

        // Update meta tag
        document.querySelector('meta[name="csrf-token"]').setAttribute('content', csrfData.csrf_token);

        // Optional: update form hidden input
        const hidden = document.querySelector(`input[name="${csrfHeader}"]`);
        if (hidden) hidden.value = csrfData.csrf_token;

        return result;
    }
    async function sendFormDataApiWithCsrf(url, data) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const csrfHeader = document.querySelector('meta[name="csrf-header"]').getAttribute('content');

        const response = await fetch(url, {
            method: 'POST',
            headers: {
                [csrfHeader]: csrfToken,
            },
            body: data,
        });

        const result = await response.json();

        // Refresh CSRF token
        const csrfRes = await fetch('/api/csrf-token');
        const csrfData = await csrfRes.json();

        // Update meta tag
        document.querySelector('meta[name="csrf-token"]').setAttribute('content', csrfData.csrf_token);

        // Optional: update form hidden input
        const hidden = document.querySelector(`input[name="${csrfHeader}"]`);
        if (hidden) hidden.value = csrfData.csrf_token;

        return result;
    }
    </script>
    <script>
    const container = document.getElementById('scrollContainer');


    function updateButtons() {
        const maxScroll = container.scrollWidth - container.clientWidth;
    }

    function scrollKiri() {
        container.scrollBy({
            left: -100,
            behavior: 'smooth'
        });
    }

    function scrollKanan() {
        container.scrollBy({
            left: 100,
            behavior: 'smooth'
        });
    }

    // Update tombol saat scroll atau saat pertama kali halaman dimuat
    container.addEventListener('scroll', updateButtons);
    window.addEventListener('load', updateButtons);
    </script>



</body>


</html>
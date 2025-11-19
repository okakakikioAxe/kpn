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
                            class="block px-4 py-2 hover:bg-gray-700 rounded">Produk</a></li>
                    <li class="py-2"><a href="/admin/category"
                            class="block px-4 py-2 hover:bg-gray-700 bg-gray-700 rounded">Kategori</a></li>
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
                <h2 class="text-xl font-bold">Kategori</h2>
                <div>
                    <button id="open-create-category-modal" type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Tambah Kategori
                    </button>
                </div>
            </header>

            <!-- Scrollable Content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <div id="category-list-container" class="grid grid-cols-6 gap-4">

                </div>

                <!-- Modal Edit Variant -->
                <div id="detail-modal" class=" fixed inset-0 hidden bg-black/40 z-50 items-center justify-center">
                    <div class="flex w-full h-full items-center justify-center">
                        <div class="bg-white rounded-xl p-6 w-[90%] max-w-[400px] shadow-lg">
                            <h2 class="text-xl font-bold mb-4">Edit Kategori</h2>

                            <!-- Input Judul -->
                            <label class="block text-sm font-medium mb-1" for="category-title">Judul Kategori</label>
                            <input type="text" id="category-title" class="w-full border rounded px-3 py-2 mb-4 text-sm"
                                placeholder="Judul Bahasa Indonesia" require />
                            <input type="text" id="english-category-title"
                                class="w-full border rounded px-3 py-2 mb-4 text-sm" placeholder="Judul Bahasa Inggris"
                                require />
                            <input type="text" id="chinnese-category-title"
                                class="w-full border rounded px-3 py-2 mb-4 text-sm" placeholder="Judul Bahasa Mandarin"
                                require />

                            <!-- Input Deskripsi -->
                            <label class="block text-sm font-medium mb-1" for="category-description">Deskripsi (max 155
                                karakter)</label>
                            <input type="text" id="category-description"
                                class="w-full border rounded px-3 py-2 mb-4 text-sm"
                                placeholder="Deskripsi Bahasa Indonesia" require />
                            <input type="text" id="english-category-description"
                                class="w-full border rounded px-3 py-2 mb-4 text-sm"
                                placeholder="Deskripsi Bahasa Inggris" require />
                            <input type="text" id="chinnese-category-description"
                                class="w-full border rounded px-3 py-2 mb-4 text-sm"
                                placeholder="Deskripsi Bahasa Mandarin" require />

                            <!-- Input Slug -->
                            <label class="block text-sm font-medium mb-1" for="category-slug">Slug</label>
                            <input type="text" id="category-slug" class="w-full border rounded px-3 py-2 mb-4 text-sm"
                                placeholder="slug-kategori" require />


                            <!-- Upload Gambar -->
                            <label class="block text-sm font-medium mb-1">Gambar Kategori</label>
                            <div class="relative mb-4 aspect-[5/3] bg-gray-100 border rounded overflow-hidden">
                                <img id="category-image-preview" src="" class="w-full h-full object-cover" />
                                <input type="file" id="category-image-input" accept="image/*"
                                    class="absolute inset-0 opacity-0 cursor-pointer" />
                            </div>

                            <!-- Aksi -->
                            <div class="flex justify-end gap-3">
                                <button type="button" id="category-delete"
                                    class="bg-red-400 text-white px-4 py-2 rounded">Hapus</button>
                                <button type="button" id="category-cancel"
                                    class="bg-gray-400 text-white px-4 py-2 rounded">Batal</button>
                                <button type="button" id="category-save"
                                    class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>




        </div>

        <div id="deleteModal" class="fixed inset-0 z-80 items-center justify-center bg-black bg-opacity-50 hidden">
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
    let data = null;


    let toastOpenTimer;
    let toastCloseTimer;

    let itemTitleToDelete = null;
    let itemIdToDelete = null;

    let imageThumbnailBlob = null;
    let isNewProduct = false;

    let selectedCategory = null;

    // sort product list =============================================
    const categoryListContainer = document.getElementById("category-list-container");
    const categoryListActionButtons = document.getElementById("category-list-action-buttons");
    const savecategoryListButton = document.getElementById("save-category-list-button");
    const cancelcategoryListButton = document.getElementById("cancel-category-list-button");
    let categoryList = <?= json_encode($categories) ?>;
    let categoryListOrder = categoryList.map(v => '/images/category' +
        '/' + v.image);
    let originalcategoryListOrder = [];


    document.getElementById("open-create-category-modal").addEventListener('click', function() {
        selectedCategory = null;
        document.getElementById('category-title').value = '';
        document.getElementById('english-category-title').value = '';
        document.getElementById('chinnese-category-title').value = '';

        document.getElementById('category-description').value = '';
        document.getElementById('english-category-description').value = '';
        document.getElementById('chinnese-category-description').value = '';

        document.getElementById('category-slug').value = '';
        document.getElementById('category-image-preview').src = '#';

        openDetailModal(selectedCategory);
    })

    function openDetailModal(category) {
        if (category != null) {
            // Isi form dari data yang dipilih
            document.getElementById('category-title').value = category.title || '';
            document.getElementById('english-category-title').value = category.en_title || '';
            document.getElementById('chinnese-category-title').value = category.cn_title || '';
            document.getElementById('category-description').value = category.description || '';
            document.getElementById('english-category-description').value = category.en_description || '';
            document.getElementById('chinnese-category-description').value = category.cn_description || '';
            document.getElementById('category-slug').value = category.slug || '';
            document.getElementById('category-slug').setAttribute('disabled', 'true');
            // document.getElementById('category-image-preview').src =
            //     `/images/products/${data.slug}/${variant.image}` || variant.image;
            // Jika base64 (gambar baru), langsung tampilkan

            document.getElementById('category-image-preview').src = '/images/category/' + category.image;
            isNewProduct = false;
        } else {
            document.getElementById('category-slug').removeAttribute('disabled');
            document.getElementById('category-slug').classList.remove('cursor-not-allowed');
            isNewProduct = true;
        }

        // Tampilkan modal
        document.getElementById('detail-modal').classList.remove('hidden');
    }

    document.getElementById('category-slug').addEventListener('input', function(e) {
        let value = e.target.value;

        value = value
            .toLowerCase() // convert to lowercase
            .replace(/\s+/g, '-') // replace spaces with dashes
            .replace(/[^a-z0-9\-]/g, '') // remove special characters (allow a-z, 0-9, -)
            .replace(/-+/g, '-') // prevent multiple dashes

        e.target.value = value;
    });


    function createProductThumbnail(category) {
        const div = document.createElement('div');
        div.className =
            ' w-full aspect-square relative cursor-pointer hover:scale-105 transform duration-200 ease-in-out';
        div.dataset.id = category.id;

        const title = document.createElement('h3');
        title.className =
            ' w-full  relative cursor-pointer ubuntu-bold text-[16px] text-center text-black mt-[4px]';
        title.textContent = category.title;

        const img = document.createElement('img');
        img.loading = 'lazy';
        img.dataset.category = JSON.stringify(category);
        img.src = `/images/category/${category.image}`;
        img.alt = category.title;
        img.className =
            ' aspect-[5/3] rounded-lg shadow-lg hover:shadow-xl transition relative object-cover w-full';

        div.addEventListener('click', () => {
            // Ganti dengan aksi yang kamu inginkan
            openDetailModal(category);
            selectedCategory = category;
            // Misal redirect:
            // window.location.href = `/category/${category.id}`;
        });

        div.appendChild(img);
        div.appendChild(title);
        return div;
    }

    // Render thumbnails and store original order
    categoryList.forEach(product => {
        const el = createProductThumbnail(product);
        categoryListContainer.appendChild(el);
        originalcategoryListOrder.push(product.id.toString());
    });



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
    document.getElementById('category-delete').addEventListener('click', async () => {

        if (selectedCategory.slug == 'lainnya') {
            alert('Tidak dapat menghapus kategori default');
        } else {
            const confirmed = confirm(
                `Yakin ingin mengubah menghapus kategori: ${selectedCategory.title}?`);

            if (confirmed) {

                const payload = {
                    category_id: selectedCategory.id
                };

                try {
                    const result = await sendApiWithCsrf(
                        '/admin/category/delete-category',
                        payload);
                    if (result.success) {
                        window.location.href = '/admin/category';
                    } else {
                        alert("Failed: " + result.message);
                    }
                } catch (err) {
                    console.error("Error saving:", err);
                }
            }
        }
    });

    // Tutup modal
    document.getElementById('category-cancel').addEventListener('click', () => {
        document.getElementById('detail-modal').classList.add('hidden');
    });

    // Ganti gambar preview saat upload
    document.getElementById('category-image-input').addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('category-image-preview').src = event
                    .target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('category-save').addEventListener('click', async () => {

        const fileInput = document.getElementById('category-image-input');
        const file = fileInput.files[0];

        // send to database
        const payload = new FormData();
        payload.append('title', document.getElementById('category-title').value);
        payload.append('en_title', document.getElementById('english-category-title').value);
        payload.append('cn_title', document.getElementById('chinnese-category-title').value);
        payload.append('description', document.getElementById('category-description').value);
        payload.append('en_description', document.getElementById('english-category-description').value);
        payload.append('cn_description', document.getElementById('chinnese-category-description').value);
        if (file) {
            payload.append('file-upload', file);
        }
        // console.log(payload);
        let url = '';
        if (isNewProduct == true) {
            url = '/admin/category/store';
            payload.append('slug', document.getElementById('category-slug').value);
        } else {
            url = '/admin/category/update/' + selectedCategory.id;
        }
        try {
            const result = await sendFormDataApiWithCsrf(
                url,
                payload);
            if (result.success) {
                location.reload();
                // originalImage = new_image_url_from_BE
                // checkVariantImageChange();

                // Tutup modal
                document.getElementById('detail-modal').classList.add('hidden');

                // Clear input file
                fileInput.value = '';
            } else {
                alert("Failed: " + result.message);
            }
        } catch (err) {
            console.error("Error saving:", err);
        }

    });
    </script>



</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/output.css">
    <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
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

        .progress-bar {
            width: 100%;
            background-color: #f3f4f6;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress-bar-inner {
            height: 20px;
            width: 0;
            background-color: #4f46e5;
            text-align: center;
            color: white;
            line-height: 20px;
            transition: width 0.4s;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 10px;
        }

        .modal-content .icon {
            font-size: 50px;
            color: green;
        }

        .modal-content .message {
            margin-top: 10px;
            font-size: 18px;
        }

        .modal-content .ok-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <!-- Include stylesheet -->
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
                    <li class="py-2"><a href="/admin/product" class="block px-4 py-2 hover:bg-gray-700">Produk</a></li>
                    <li class="py-2"><a href="/admin/change-password" class="block px-4 py-2 hover:bg-gray-700">Ubah Password</a></li>
                    <li class="py-2"><a href="/logout" class="block px-4 py-2 hover:bg-red-700 ">
                            <p class="text-red-400">Logout</p>
                        </a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="header sticky top-0 z-5 bg-white shadow-md flex justify-between items-center p-6">
                <h2 class="text-xl font-bold">Edit Produk</h2>

            </header>

            <!-- Scrollable Content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <form id="upload-form" action="/admin/product/update/<?= $product['id'] ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class=" space-y-12 flex w-full justify-center">
                        <div class="border-b w-full max-w-[800px] border-gray-900/10 pb-12">
                            <div>
                                <h2 class="text-base/7 font-semibold text-gray-900">Gambar</h2>
                                <div class="mt-2 py-6 w-[400px] aspect-square">
                                    <div class="relative text-center rounded-lg border border-dashed border-gray-900/25 h-full flex justify-center items-center cursor-pointer">
                                        <div id="placeholder-container" class="hidden">
                                            <svg id="image-icon" class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                            </svg>
                                        
                                            <div class="mt-4 flex justify-center text-sm/6 text-gray-600">
                                                <label for="file-upload" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                    <span>Upload gambar</span>
                                                </label>
                                            </div>
                                            <p class="text-xs/5 text-gray-600">Gambar up to 5MB</p>
                                        </div>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" />
                                        <img id="image-preview" class="mt-2 max-h-110 rounded-lg shadow-lg" src="/galery/content/<?= $product['image'] ?>" />
                                        <input type="hidden" name="thumbnail" id="thumbnail-data">
                                        <canvas id="thumbnailCanvas" class=" aspect-square w-[200px] hidden"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 grid grid-cols-6 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-4">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Judul</h2>
                                    <div class="mt-2">
                                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                            <input required type="text" name="title" id="title" class="block w-full grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Judul konten" value="<?= $product['title'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Kategori</h2>
                                    <div class="mt-2 w-full">
                                        <div id="dropdown-container" class="cursor-pointer flex h-9 w-full items-center justify-between rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                            <div class="custom-dropdown relative w-full h-9 flex justify-start items-center px-4">
                                                <div id="dropdownInput" class="dropdown-input   w-full items-center flex h-9 justify-between ">
                                                    <p id="dropdownText" class=" text-base text-gray-900  focus:outline-none font-trebuchet text-[16px] font-bold"  placeholder="Pilih kategori"><?= strtoupper($product['category'] == 'toy' ? 'MAINAN' : $product['category']) ?></p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="22" height="22"><path d="M6.414,9H17.586a1,1,0,0,1,.707,1.707l-5.586,5.586a1,1,0,0,1-1.414,0L5.707,10.707A1,1,0,0,1,6.414,9Z"/></svg>
                                                </div>
                                                <div class="dropdown-content hidden absolute flex-col gap-1 bg-white w-full top-9 left-0 px-4 py-2 outline-1 outline-gray-300" id="dropdownContent">
                                                    <div class="dropdown-item cursor-pointer" data-value="hdpe">HDPE</div>
                                                    <div class="dropdown-item cursor-pointer" data-value="xpe">XPE</div>
                                                    <div class="dropdown-item cursor-pointer" data-value="eva">EVA</div>
                                                    <div class="dropdown-item cursor-pointer" data-value="toy">MAINAN</div>
                                                </div>
                                                <!-- Hidden input to store the actual value -->
                                                <input type="hidden" name="category" id="selectedOption" value="<?= $product['category'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Deskripsi</h2>
                                    <div class="mt-2">
                                        <div id="editor">
                                            <?= $product['description'] ?>
                                        </div>
                                        <input id="description" name="description" type="hidden" value="<?= $product['description'] ?>">
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <div class="container w-full">
                                        <h1>Variant List</h1>
                                        <div class="variants-container w-full " id="variants-list"></div>
                                        <input type="hidden" name="variant-order" id="variant-order">
                                        <input type="hidden" name="deleted-variants" id="deleted-variant">
                                        <div class="add-variant cursor-pointer" id="add-variant">+ Add New Variant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="action-button" class="mt-6 flex items-center justify-center gap-x-6">
                        <div class="w-full max-w-[800px] flex justify-end items-center gap-x-6">
                            <a href="/admin/product" id="cancel-button" type="button" class="text-sm/6 font-semibold text-gray-900 cursor-pointer ">Cancel</a>
                            <button type="submit" id="save-button" class="cursor-pointer rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </div>

                </form>

                <!-- Progress Bar -->
                <div class="flex w-full justify-center">
                    <div class="w-full max-w-[800px]">
                        <div class="progress-bar">
                            <div id="progress-bar-inner" class="progress-bar-inner">0%</div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div id="success-modal" class="modal">
                    <div class="modal-content">
                        <div class="icon">✔️</div>
                        <div class="message">Konten telah diupdate</div>
                        <button class="ok-button" onclick="redirectToProduct()">OK</button>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
    <script>
        const canvas = document.getElementById('thumbnailCanvas');
        const ctx = canvas.getContext('2d');
        const maxSize = 350;

        const imagePreview = document.getElementById("image-preview");
        const imageIcon = document.getElementById("image-icon");
        const fileUpload = document.getElementById("file-upload");

        let variantOrder = document.getElementById('variant-order');
        let variants = [];

        // Set canvas size
        canvas.width = maxSize;
        canvas.height = maxSize;

        imagePreview.addEventListener("click", function(event) {
            fileUpload.click();
            document.getElementById("placeholder-container").classList.add("hidden");
        });

        fileUpload.addEventListener("change", function(event) {
            document.getElementById("placeholder-container").classList.add("hidden");
            const file = event.target.files[0];
            // check if file is not empty
            if (file) {

                // delete all src and hide the preview
                imagePreview.classList.add("hidden");
                imagePreview.src = "";

                    const reader = new FileReader();
                    reader.onload = function(e) {

                        imagePreview.src = e.target.result;
                        imagePreview.classList.remove("hidden");
                        imageIcon.classList.add("hidden");

                        const img = new Image();
                        img.src = e.target.result;
                        img.onload = function() {
                            let width = img.width;
                            let height = img.height;

                            // Determine the size of the square crop
                            let cropSize = Math.min(width, height);
                            let cropX = (width - cropSize) / 2;
                            let cropY = (height - cropSize) / 2;

                            // Draw cropped and resized image onto canvas
                            ctx.drawImage(img, cropX, cropY, cropSize, cropSize, 0, 0, maxSize, maxSize);

                            // Store the cropped thumbnail as Base64
                            document.getElementById('thumbnail-data').value = canvas.toDataURL('image/jpeg');
                        };

                    };
                    reader.readAsDataURL(file);
            }
        });

        document.getElementById('upload-form').addEventListener('submit', function(event) {
            document.getElementById('variant-order').value = JSON.stringify(variants);
            document.getElementById('action-button').classList.add('hidden');
            event.preventDefault();

            let htmlValue = quill.getSemanticHTML();
            document.getElementById('description').value = htmlValue;

            const form = event.target;
            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();

            // Disable buttons
            document.getElementById('cancel-button').disabled = true;
            document.getElementById('save-button').disabled = true;

            xhr.open('POST', form.action, true);

            xhr.upload.addEventListener('progress', function(event) {
                if (event.lengthComputable) {
                    const percentComplete = (event.loaded / event.total) * 100;
                    const progressBarInner = document.getElementById('progress-bar-inner');
                    progressBarInner.style.width = percentComplete + '%';
                    progressBarInner.textContent = Math.round(percentComplete) + '%';
                }
            });

            xhr.addEventListener('load', function() {
                if (xhr.status === 200) {
                    // Show success modal
                    document.getElementById('success-modal').style.display = 'block';
                    localStorage.removeItem('variants');
                } else {
                    alert('Upload failed!');
                    // Enable buttons if upload failed
                    document.getElementById('action-button').classList.remove('hidden');
                    document.getElementById('cancel-button').disabled = false;
                    document.getElementById('save-button').disabled = false;
                }
            });

            xhr.send(formData);
        });

        function redirectToProduct() {
            window.location.href = '/admin/product/toast?text=Produk%20Berhasil%20Diupdate!';
        }
    </script>

    <script>
        // Get all necessary elements
        const dropdownContainer = document.getElementById('dropdown-container');
        const dropdownInput = document.getElementById('dropdownInput');
        const dropdownText = document.getElementById('dropdownText');
        const dropdownContent = document.getElementById('dropdownContent');
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        const selectedOptionInput = document.getElementById('selectedOption');

        // Toggle dropdown when clicking the input
        dropdownContainer.addEventListener('click', function() {
        toggleDropdown();
        });

        function toggleDropdown() {
            console.log('clicked');
            if(dropdownContent.classList.contains('hidden')){
                dropdownContent.classList.replace('hidden','flex');
            }
            else{
                dropdownContent.classList.replace('flex','hidden');
            }
        }

        // Handle item selection
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                // Get the value and text from the clicked item
                const value = this.getAttribute('data-value');
                const text = this.textContent;
                
                // Update the display and hidden input
                dropdownText.innerHTML = text;
                selectedOptionInput.value = value;
                
                // Hide the dropdown
                // dropdownContent.classList.replace('hidden','block');
            });
        });

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const variantsList = document.getElementById('variants-list');
            const addVariantBtn = document.getElementById('add-variant');
            
            let draggedItem = null;
            let deletedVariants = [];

            // Load initial variants or show placeholder
            if (variants.length === 0) {
                showPlaceholder();
            }


            // Add new variant
            addVariantBtn.addEventListener('click', function() {
                addNewVariant();
                removePlaceholder();
            });

            function addNewVariant(data = {}) {
                const randomId = 'new-' + Math.random().toString(36).substr(2, 9);
                const variant = {
                    id : data.id || randomId,
                    title: data.title || 'New Variant',
                    color: data.color || '#3498db',
                    image: data.image || ''
                };

                variants.push(variant);
                variantOrder.value = JSON.stringify(variants);
                renderVariant(variant);
                saveVariants();
            }

            function renderVariant(variant) {
                const variantItem = document.createElement('div');
                variantItem.className = 'variant-item w-full h-auto flex gap-3 my-4';
                variantItem.id = `variant-${variant.id}`;
                variantItem.draggable = true;

                variantItem.innerHTML = `
                                <div class="flex justify-start items-center flex-1">
                                    <div class="w-30 image-container aspect-square flex justify-center items-center bg-gray-50 hover:border-dashed hover:border-[1px] hover:border-green-700 cursor-pointer">
                                        <div class=" flex justify-center items-center flex-col">
                                            <div class="image-placeholder flex justify-center flex-col items-center ${variant.image == '' ? '' : 'hidden'}">
                                                <input type="file" name="variants[]" class="file-input" accept="image/*" style="display:none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="22" height="22" fill="#555555"><path d="M9,7.5c0-.83,.67-1.5,1.5-1.5s1.5,.67,1.5,1.5-.67,1.5-1.5,1.5-1.5-.67-1.5-1.5Zm15-.5v6c0,2.76-2.24,5-5,5H10c-2.76,0-5-2.24-5-5V7c0-2.76,2.24-5,5-5h9c2.76,0,5,2.24,5,5ZM7,13c0,.77,.29,1.47,.77,2.01l5.24-5.24c.98-.98,2.69-.98,3.67,0l1.04,1.04c.23,.23,.62,.23,.85,0l3.43-3.43v-.38c0-1.65-1.35-3-3-3H10c-1.65,0-3,1.35-3,3v6Zm15,0v-2.79l-2.02,2.02c-.98,.98-2.69,.98-3.67,0l-1.04-1.04c-.23-.23-.61-.23-.85,0l-4.79,4.79c.12,.02,.24,.02,.37,.02h9c1.65,0,3-1.35,3-3Zm-5,7H5c-1.65,0-3-1.35-3-3v-6c0-.74,.27-1.45,.77-2,.37-.41,.33-1.04-.08-1.41-.41-.37-1.04-.33-1.41,.08-.82,.92-1.28,2.1-1.28,3.34v6c0,2.76,2.24,5,5,5h12c.55,0,1-.45,1-1s-.45-1-1-1Z"/></svg>
                                                <p class="text-gray-700">Unggah</p>
                                                <p class="text-gray-700">Gambar</p>
                                            </div>
                                            <div class="image-data relative ${variant.image == '' ? 'hidden' : ''}">
                                                <img src="${variant.image}" alt="Variant Images" class="variant-image w-full rounded-lg aspect-square">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="variant-details flex-3 items-center justify-center h-full w-full">
                                    <input type="text" name="titles[]" class="variant-title bg-gray-50/80 border-gray-300 border-[1px] w-full px-2 py-1 rounded-md" value="${variant.title}">
                                </div>
                                <div class="variant-controls flex-1 flex justify-end items-start">
                                    <div class="flex-1 justify-end items-end flex rounded-full h-8 aspect-square">
                                        <input type="color" name="colors[]" class="color-picker h-8 aspect-square rounded-full cursor-pointer" value="${variant.color}">
                                    </div>
                                    <div class="flex-1 w-full justify-end h-8 items-center flex">
                                        <button class="delete-btn cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="22" height="22" fill="#555555"><path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z"/><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z"/><path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                        </button>
                                    </div>
                                    <div class="flex-1 justify-center items-center h-8 flex">

                                        <div class="drag-handle cursor-grab">⋮⋮</div>
                                    </div>
                                </div>
                            `;

                variantsList.appendChild(variantItem);

                // Set up event listeners
                const titleInput = variantItem.querySelector('.variant-title');
                const colorPicker = variantItem.querySelector('.color-picker');
                const deleteBtn = variantItem.querySelector('.delete-btn');
                const imageContainer = variantItem.querySelector('.image-container');
                const fileInput = variantItem.querySelector('.file-input');

                titleInput.addEventListener('input', function() {
                    updateVariant(variant.id, { title: this.value });
                });

                colorPicker.addEventListener('input', function() {
                    updateVariant(variant.id, { color: this.value });
                });

                deleteBtn.addEventListener('click', function() {
                    deleteVariant(variant.id);
                });
                
                // Image upload functionality
                imageContainer.addEventListener('click', function(e) {
                    if (e.target.closest('.delete-btn')) return;
                    fileInput.click();
                });
                
                fileInput.addEventListener('change', function(e) {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            const imageUrl = event.target.result;
                            variantItem.querySelector('.variant-image').src = imageUrl;
                            variantItem.querySelector('.image-placeholder').classList.add('hidden');
                            variantItem.querySelector('.image-data').classList.remove('hidden');
                            updateVariant(variant.id, { image: imageUrl });
                        };
                        reader.readAsDataURL(this.files[0]);
                    }
                });

                // Drag and drop functionality
                variantItem.addEventListener('dragstart', function(e) {
                    draggedItem = variantItem;
                    setTimeout(() => {
                        variantItem.classList.add('dragging');
                    }, 0);
                });

                variantItem.addEventListener('dragend', function() {
                    draggedItem = null;
                    variantItem.classList.remove('dragging');
                    saveOrder();
                });

                variantItem.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    if (draggedItem === variantItem) return;
                    
                    const closest = getClosestVariant(e.clientY);
                    if (closest !== null) {
                        variantsList.insertBefore(draggedItem, closest);
                    } else {
                        variantsList.appendChild(draggedItem);
                    }
                });
            }

            function updateVariant(id, data) {
                const index = variants.findIndex(v => v.id === id);
                if (index !== -1) {
                    variants[index] = { ...variants[index], ...data };
                    saveVariants();
                }
            }

            function deleteVariant(id) {
                variants = variants.filter(v => v.id !== id);
                // add id to deleted variant

                if(!(id.startsWith('new-'))) {
                    deletedVariants.push(id);
                    const deletedVariant = document.getElementById('deleted-variant');
                    deletedVariant.value = deletedVariants;
                }

                const variantElement = document.getElementById(`variant-${id}`);
                if (variantElement) {
                    variantElement.remove();
                }
                saveVariants();
                
                if (variants.length === 0) {
                    showPlaceholder();
                }
            }

            function saveVariants() {
                localStorage.setItem('variants', JSON.stringify(variants));
            }

            function loadVariants() {
                const saved = localStorage.getItem('variants');
                if (saved) {
                    variants = JSON.parse(saved);
                    if (variants.length > 0) {
                        removePlaceholder();
                        variants.forEach(variant => renderVariant(variant));
                    }
                }
            }

            function saveOrder() {
                const items = document.querySelectorAll('.variant-item');
                const newOrder = [];
                
                items.forEach(item => {
                    const id = item.id.replace('variant-', '');
                    const variant = variants.find(v => v.id === id);
                    if (variant) {
                        newOrder.push(variant);
                    }
                });
                
                variants = newOrder;
                saveVariants();
            }

            function getClosestVariant(y) {
                const elements = [...document.querySelectorAll('.variant-item:not(.dragging)')];
                
                return elements.reduce((closest, child) => {
                    const box = child.getBoundingClientRect();
                    const offset = y - box.top - box.height / 2;
                    
                    if (offset < 0 && offset > closest.offset) {
                        return { offset, element: child };
                    } else {
                        return closest;
                    }
                }, { offset: Number.NEGATIVE_INFINITY }).element;
            }

            function showPlaceholder() {
                if (!document.querySelector('.placeholder')) {
                    const placeholder = document.createElement('div');
                    placeholder.className = 'placeholder';
                    placeholder.innerHTML = 'No variants yet. Click "Add New Variant" to get started.';
                    variantsList.appendChild(placeholder);
                }
            }

            function removePlaceholder() {
                const placeholder = document.querySelector('.placeholder');
                if (placeholder) {
                    placeholder.remove();
                }
            }

            function fetchVariantData() {
                localStorage.removeItem('variants')
                removePlaceholder();
                let productVariants = <?= json_encode($product['variant_list']) ?>;
                if (productVariants.length > 0) {
                    productVariants.forEach(variant => {
                        console.log(variant);
                        const variantData = {
                            id: variant['id'],
                            title:  variant['title'],
                            color:  variant['color'],
                            image:  ('/galery/content/' + variant['image'])
                        };
                        variants.push(variantData);
                        variantOrder.value = JSON.stringify(variants);
                        renderVariant(variantData);
                        saveVariants();
                    });
                } else {
                    showPlaceholder();
                    addNewVariant({ title: 'Blue Variant', color: '#3498db' });
                }
                
            }

            fetchVariantData();
        });
    </script>
</body>

</html>
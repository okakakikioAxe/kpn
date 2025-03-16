<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/output.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
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
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar sticky z-5 top-0 h-screen bg-gray-800 text-white p-6 w-64 flex-shrink-0">
            <h1 class="text-xl font-bold">COREUI</h1>
            <nav class="mt-5">
                <ul>
                    <li class="py-2"><a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">Dashboard</a></li>
                    <li class="py-2"><a href="#" class="block px-4 py-2 bg-gray-700 rounded">Galery</a></li>
                    <li class="py-2"><a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded">Settings</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="header sticky top-0 z-5 bg-white shadow-md flex justify-between items-center p-6">
                <h2 class="text-xl font-bold">Tambah Galery</h2>

            </header>

            <!-- Scrollable Content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <form id="upload-form" action="/admin/galery/store" method="POST" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="col-span-full">
                                <h2 class="text-base/7 font-semibold text-gray-900">File</h2>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                    <div class="text-center">
                                        <svg id="image-icon" class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                        </svg>
                                        <div id="preview-container" class="mt-4 flex justify-center">
                                            <img id="image-preview" class="mt-2 max-h-110 rounded-lg shadow-lg" />
                                            <video id="video-preview" class="hidden w-[600px] h-auto" controls></video>
                                        </div>
                                        <div class="mt-4 flex justify-center text-sm/6 text-gray-600">
                                            <label for="file-upload" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                <span>Upload file</span>
                                            </label>
                                        </div>
                                        <p class="text-xs/5 text-gray-600">Video / Gambar up to 500MB</p>
                                        <input required id="file-upload" name="file-upload" type="file" class="sr-only">
                                        <canvas id="thumbnailCanvas" class="hidden"></canvas>
                                        <input type="hidden" name="thumbnail" id="thumbnail-data">
                                        <input type="hidden" name="type" id="content-type">

                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Judul</h2>
                                    <div class="mt-2">
                                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                            <input required type="text" name="title" id="title" class="block w-full grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Judul konten">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <h2 class="text-base/7 font-semibold text-gray-900">Deskripsi</h2>
                                    <div class="mt-2">
                                        <textarea required name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Deskripsi konten"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="action-button" class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="javascript:history.back()" id="cancel-button" type="button" class="text-sm/6 font-semibold text-gray-900 cursor-pointer ">Cancel</a>
                        <button type="submit" id="save-button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>

                <!-- Progress Bar -->
                <div class="progress-bar">
                    <div id="progress-bar-inner" class="progress-bar-inner">0%</< /div>
                    </div>

                    <!-- Modal -->
                    <div id="success-modal" class="modal">
                        <div class="modal-content">
                            <div class="icon">✔️</div>
                            <div class="message">Konten telah ditambahkan</div>
                            <button class="ok-button" onclick="redirectToGallery()">OK</button>
                        </div>
                    </div>

            </main>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('thumbnailCanvas');
        const ctx = canvas.getContext('2d');
        const maxSize = 150;

        const previewContainer = document.getElementById("preview-container");
        const imagePreview = document.getElementById("image-preview");
        const videoPreview = document.getElementById('video-preview');
        const contentType = document.getElementById("content-type");
        const imageIcon = document.getElementById("image-icon");

        // Set canvas size
        canvas.width = maxSize;
        canvas.height = maxSize;

        document.getElementById("file-upload").addEventListener("change", function(event) {
            const file = event.target.files[0];
            // check if file is not empty
            if (file) {
                if (videoPreview.src) {
                    URL.revokeObjectURL(videoPreview.src); // Hapus URL sebelumnya sebelum mengganti file
                }

                // delete all src and hide the preview
                imagePreview.classList.add("hidden");
                videoPreview.classList.add("hidden");
                imagePreview.src = "";
                videoPreview.src = "";

                // check if input is video or image
                const fileType = file.type;
                if (fileType.startsWith('image/')) {

                    const reader = new FileReader();
                    reader.onload = function(e) {

                        imagePreview.src = e.target.result;
                        imagePreview.classList.remove("hidden");
                        previewContainer.classList.remove("hidden");
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
                            contentType.value = 0;
                        };

                    };
                    reader.readAsDataURL(file);
                } else if (fileType.startsWith('video/')) {

                    const video = document.getElementById('video');

                    const url = URL.createObjectURL(file);

                    videoPreview.src = url;
                    videoPreview.addEventListener('loadeddata', function() {
                        videoPreview.currentTime = 1; // Capture the frame at 1 second
                    });

                    videoPreview.addEventListener('seeked', function() {
                        let width = videoPreview.videoWidth;
                        let height = videoPreview.videoHeight;

                        // Determine the size of the square crop
                        let cropSize = Math.min(width, height);
                        let cropX = (width - cropSize) / 2;
                        let cropY = (height - cropSize) / 2;

                        // imagePreview.src = e.target.result;
                        previewContainer.classList.remove("hidden");
                        videoPreview.classList.remove("hidden");
                        imageIcon.classList.add("hidden");

                        ctx.drawImage(videoPreview, cropX, cropY, cropSize, cropSize, 0, 0, maxSize, maxSize);
                        document.getElementById('thumbnail-data').value = canvas.toDataURL('image/jpeg');
                        contentType.value = 1;
                    });

                } else {
                    alert('File harus berupa gambar maupun video');
                }
            }
        });

        document.getElementById('upload-form').addEventListener('submit', function(event) {
            document.getElementById('action-button').classList.add('hidden');
            event.preventDefault();

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
                } else {
                    alert('Upload failed!');
                    // Enable buttons if upload failed
                    document.getElementById('cancel-button').disabled = false;
                    document.getElementById('save-button').disabled = false;
                }
            });

            xhr.send(formData);
        });

        function redirectToGallery() {
            window.location.href = '/admin/galery/toast';
        }
    </script>
</body>

</html>
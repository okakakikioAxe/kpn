<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/output.css">
    <link rel="stylesheet" href="/css/global_style.css">
    <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
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
                <h2 class="text-xl font-bold">Galery</h2>
                <a href="/admin/galery/create" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Tambah Galery
                </a>
            </header>

            <!-- Scrollable Content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <div class="grid grid-cols-8 gap-4">
                    <?php foreach ($images as $image): ?>
                        <div class="w-full thumbnail relative cursor-pointer hover:scale-105 transform duration-200 ease-in-out">
                            <img loading="lazy" data-id="<?= $image['id'] ?>" data-image="<?= $image['image'] ?>" data-title="<?= $image['title'] ?>" data-description="<?= $image['description'] ?>" data-status="<?= $image['status'] ?>" data-created="<?= $image['created_at'] ?>" data-type="<?= $image['type'] ?>" src="/galery/thumbnail/<?= $image['thumbnail'] ?>" alt="<?= $image['image_alt'] ?>"
                                class="  rounded-lg shadow-lg hover:shadow-xl transition relative">

                            <?php if ($image['type'] == 1): ?>
                                <div class="absolute top-0 left-0 h-full w-auto aspect-square flex items-center justify-center mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="#ffffff" data-name="Layer 1" viewBox="0 0 24 24" width="50%">
                                        <path d="m16.55,10.435l-5.848-3.203c-.562-.316-1.228-.309-1.783.014-.556.325-.888.904-.888,1.548v6.411c0,.644.332,1.223.888,1.548.283.165.595.248.905.248.301,0,.6-.077.873-.23l5.857-3.208c.572-.322.914-.906.914-1.562s-.342-1.241-.919-1.565Zm-.48,2.253l-5.857,3.208c-.249.139-.543.137-.788-.006-.246-.144-.393-.4-.393-.685v-6.411c0-.285.146-.541.393-.685.124-.072.261-.109.398-.109.134,0,.27.035.395.105l5.848,3.203c.253.142.404.4.404.69s-.151.548-.399.688ZM12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,23c-6.065,0-11-4.935-11-11S5.935,1,12,1s11,4.935,11,11-4.935,11-11,11Z" />
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div id="imageModal" class="fixed z-10 inset-0 hidden items-center justify-center bg-black/70 opacity-0 backdrop-blur-0 transition-opacity duration-300 ease-in-out">
                    <div id="imageContent" class="bg-white rounded-lg shadow-lg p-6 w-full max-w-[1000px] transform scale-95 transition-transform duration-300 ease-in-out relative">
                        <!-- Close Button -->
                        <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 cursor-pointer">
                            ✖
                        </button>

                        <!-- Modal Content -->
                        <div class="flex gap-4">
                            <!-- Image Section -->
                            <div class="w-1/2">
                                <img loading="lazy" id="modalImage" src="" class="hidden rounded-lg w-full">
                                <video loading="lazy" id="modalVideo" src="" class="hidden rounded-lg w-full" controls></video>
                            </div>

                            <!-- Details Section -->
                            <div class="w-1/2 flex flex-col justify-between">
                                <div>
                                    <h2 id="modalTitle" class=" text-stone-800 text-[20px] xl:text-[28px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]"></h2>
                                    <h4 class="text-stone-600 pt-[35px] font-humanist-normal text-[16px] xl:text-[18px]">Deskripsi</h4>
                                    <p id="modalDesc" class=" text-stone-500 text-[16px] xl:text-[18px] font-humanist-normal leading-[130%] tracking-[0.02em] font-[400]"></p>

                                    <!-- Status Toggle -->
                                    <div class="flex items-end justify-start mt-[30px] h-6">
                                        <span class="text-stone-600 font-humanist-normal text-[16px] xl:text-[18px] w-[100px] ">Status</span>
                                        <span class="text-stone-600 font-humanist-normal text-[16px] xl:text-[18px] w-[20px] "> : </span>
                                        <label class="relative inline-flex items-center cursor-pointer h-6">
                                            <input id="statusToggle" type="checkbox" value="" class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-300 peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-1 after:left-1 after:bg-white after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:after:translate-x-5"></div>
                                        </label>
                                    </div>

                                    <!-- Date -->
                                    <div class="flex items-end justify-start mt-[10px] h-6">
                                        <span class="text-stone-600 font-humanist-normal text-[16px] xl:text-[18px] w-[100px] ">Dibuat</span>
                                        <span class="text-stone-600 font-humanist-normal text-[16px] xl:text-[18px] w-[20px] "> : </span>
                                        <span id="modalDate" class="text-stone-600 font-humanist-normal text-[16px] xl:text-[18px]"></span>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="mt-[20px] flex gap-3 justify-end">
                                    <button id="editBtn" class="bg-orange-400 text-white px-4 py-2 rounded-lg hover:bg-orange-600 cursor-pointer">
                                        Edit
                                    </button>
                                    <button id="deleteBtn" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 cursor-pointer">
                                        Delete
                                    </button>
                                </div>
                            </div>
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
        const modalContent = document.getElementById("imageContent");
        const closeModal = document.getElementById("closeModal");
        const modalImage = document.getElementById("modalImage");
        const modalVideo = document.getElementById("modalVideo");
        const modalTitle = document.getElementById("modalTitle");
        const modalDesc = document.getElementById("modalDesc");
        const modalDate = document.getElementById("modalDate");
        const statusToggle = document.getElementById("statusToggle");
        let currentItem = null;
        const toastModal = document.getElementById("toastModal");
        const toastMessage = document.getElementById("toastMessage");
        const toastProgress = document.getElementById("toastProgress");

        let toastOpenTimer;
        let toastCloseTimer;

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

        // Event listener for image click
        document.querySelectorAll(".thumbnail").forEach(contentDetail => {
            contentDetail.addEventListener("click", (e) => {
                if (contentDetail.dataset.type == 0) {
                    // image
                    modalImage.src = '/galery/content/' + contentDetail.dataset.image;
                    modalImage.classList.remove("hidden");
                } else {
                    // video
                    modalVideo.src = '/galery/content/' + contentDetail.dataset.image;
                    modalVideo.classList.remove("hidden");
                }
                modalTitle.textContent = contentDetail.dataset.title;
                modalDesc.textContent = contentDetail.dataset.description;
                modalDate.textContent = formatDateTime(contentDetail.dataset.created);
                statusToggle.checked = contentDetail.dataset.status == 1;
                currentItem = contentDetail;
                modal.classList.replace("hidden", "flex");
                setTimeout(() => {
                    modal.classList.replace("opacity-0", "opacity-100");
                    modalContent.classList.replace("scale-95", "scale-100");
                    modal.classList.replace(
                        "backdrop-blur-0",
                        "backdrop-blur-sm",
                    );
                }, 100);
                // modalContent.classList.replace("scale-80", "scale-100");

            });
        });

        // Status toggle event listener
        statusToggle.addEventListener("change", () => {
            if (currentItem) {
                currentItem.dataset.status = currentItem.dataset.status == 1 ? 0 : 1;
                console.log(currentItem.dataset.status);
                showToast(`Status changed to ${statusToggle.checked ? "Active" : "Inactive"}`);
            }
        });

        // Close Modal
        closeModal.addEventListener("click", () => {
            modal.classList.replace("opacity-100", "opacity-0");
            modalContent.classList.replace("scale-100", "scale-95");
            modalImage.classList.add("hidden");
            modalVideo.classList.add("hidden");
            modal.classList.replace(
                "backdrop-blur-sm",
                "backdrop-blur-0",
            );
            setTimeout(() => {
                modal.classList.replace("flex", "hidden");
            }, 300);
        });

        // Close when clicking outside modal
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.replace("opacity-100", "opacity-0");
                modalContent.classList.replace("scale-100", "scale-95");
                modal.classList.replace(
                    "backdrop-blur-sm",
                    "backdrop-blur-0",
                );
                setTimeout(() => {
                    modal.classList.replace("flex", "hidden");
                    modalImage.classList.add("hidden");
                    modalVideo.classList.add("hidden");
                }, 300);
            }
        });
    </script>
</body>

</html>
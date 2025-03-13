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

        /* .card {
            display: flex;
            align-items: center;
            justify-content: center;
            aspect-ratio: 1 / 1;
            border-radius: 10px;
            color: white;
            font-weight: bold;
        }

        .card img {
            border-radius: 10px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal-content {
            position: relative;
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 600px;
            transform: scale(0.8);
            transition: transform 0.3s ease;
            transform: scale(0.8);
            transition: transform 0.3s ease;
        }

        .modal img {
            width: 100%;
            border-radius: 10px;
        }

        .close {
            display: flex;
            width: 100%;
            height: 30px;
            justify-content: end;
            align-items: end;
            font-size: 40px;
            margin-top: 10px;
        }

        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal.show .modal-content {
            transform: scale(1);
        }

        .date {
            width: 250px;
            display: flex;
            font-weight: bold;
            align-items: start;
            justify-content: start;
        }

        .status {
            color: green;
            margin-left: 15px;
            font-weight: bold;
        } */
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
                <div class="grid grid-cols-12 gap-4">
                    <img data-id="1" src="https://picsum.photos/300/300?random=1" alt="Item 1"
                        class="thumbnail cursor-pointer rounded-lg shadow-lg hover:shadow-xl transition" width="200">
                    <img data-id="2" src="https://picsum.photos/300/300?random=2" alt="Item 2"
                        class="thumbnail cursor-pointer rounded-lg shadow-lg hover:shadow-xl transition" width="200">
                    <img data-id="3" src="https://picsum.photos/300/300?random=3" alt="Item 3"
                        class="thumbnail cursor-pointer rounded-lg shadow-lg hover:shadow-xl transition" width="200">
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
                                <img id="modalImage" src="" alt="Full Image" class="rounded-lg w-full">
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
        // Data for the images
        const imageData = [{
                id: "1",
                src: "https://picsum.photos/300/300?random=1",
                title: "Blue Tote Bag A stylish blue tote bag for everyday use.",
                description: "A stylish blue tote bag for everyday use.",
                status: 0,
                date: "2025-02-19 06:44:43"
            },
            {
                id: "2",
                src: "https://picsum.photos/300/300?random=2",
                title: "Red Handbag",
                description: "Elegant red handbag with leather straps.",
                status: 0,
                date: "2025-02-19 06:44:43"
            },
            {
                id: "3",
                src: "https://picsum.photos/300/300?random=3",
                title: "Green Backpack",
                description: "Spacious green backpack for travel.",
                status: 1,
                date: "2025-02-19 06:44:43"
            }
        ];


        const modal = document.getElementById("imageModal");
        const modalContent = document.getElementById("imageContent");
        const closeModal = document.getElementById("closeModal");
        const modalImage = document.getElementById("modalImage");
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

        // Event listener for image click
        document.querySelectorAll(".thumbnail").forEach(img => {
            img.addEventListener("click", () => {
                currentItem = imageData.find(i => i.id === img.dataset.id);
                if (currentItem) {
                    modalImage.src = currentItem.src;
                    modalTitle.textContent = currentItem.title;
                    modalDesc.textContent = currentItem.description;
                    modalDate.textContent = currentItem.date;
                    statusToggle.checked = currentItem.status === 1;
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
                }
            });
        });

        // Status toggle event listener
        statusToggle.addEventListener("change", () => {
            if (currentItem) {
                currentItem.status = statusToggle.checked ? 1 : 0;
                showToast(`Status changed to ${statusToggle.checked ? "Active" : "Inactive"}`);
            }
        });

        // Close Modal
        closeModal.addEventListener("click", () => {

            modal.classList.replace("opacity-100", "opacity-0");
            modalContent.classList.replace("scale-100", "scale-95");
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
                }, 300);
            }
        });
    </script>
</body>

</html>
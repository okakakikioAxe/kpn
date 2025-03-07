<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        .card {
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
        }
    </style>
</head>
<body class="bg-gray-100">
    
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h1 class="text-xl font-bold">COREUI</h1>
            <nav class="mt-5">
                <ul>
                    <li><a href="#" >Dashboard</a></li>
                    <li><a href="#" class="bg-gray-700">Galery</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </nav>
        </aside>
    
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            
            <!-- Navbar -->
            <header class="header flex justify-between items-center">
                <h2 class="text-xl font-bold">Galery</h2>
                <div class="flex items-center gap-4">
                    <input type="search" placeholder="Search..." class="border px-4 py-1 rounded" />
                    <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                </div>
				
            </header>
    
            <!-- Content -->
            <main class="p-6">
				<div class="bg-white mb-4 p-4 rounded-lg shadow-md flex justify-end items-end">
					<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah Galery</button>
                </div>
                <div class="grid grid-cols-8 gap-2">
					<div class="card bg-blue-500 col-span-1"><img src="https://picsum.photos/300/300?random=1" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-green-500 col-span-1"><img src="https://picsum.photos/300/300?random=2" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-blue-500 col-span-1"><img src="https://picsum.photos/300/300?random=3" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-green-500 col-span-1"><img src="https://picsum.photos/300/300?random=4" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-blue-500 col-span-1"><img src="https://picsum.photos/300/300?random=5" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-green-500 col-span-1"><img src="https://picsum.photos/300/300?random=6" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-blue-500 col-span-1"><img src="https://picsum.photos/300/300?random=7" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-green-500 col-span-1"><img src="https://picsum.photos/300/300?random=8" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-blue-500 col-span-1"><img src="https://picsum.photos/300/300?random=9" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-green-500 col-span-1"><img src="https://picsum.photos/300/300?random=10" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-blue-500 col-span-1"><img src="https://picsum.photos/300/300?random=11" alt="300×300" onclick="openModal(this)"></div>
					<div class="card bg-green-500 col-span-1"><img src="https://picsum.photos/300/300?random=12" alt="300×300" onclick="openModal(this)"></div>
				</div>
				<div id="imageModal" class="modal flex">
					<div class="modal-content">
						<div class="flex">
							<p class="date">12 Februari 2025</p>
							<span class="status">Aktif</span>
							<span class="close" onclick="closeModal()">&times;</span>
						</div>
						<img id="modalImage" src="" alt="">
						<h2 class="mt-4 text-gray-700 font-bold text-xl flex justify-start items-start">This is an image Title.</h2>
						<p class="mt-4 text-gray-700 text-left flex justify-start items-start">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						<div class="bg-white mb-4 bt-2 p-2 rounded-lg shadow-md flex justify-end items-end">
							<button type="button" class="focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Nonaktifkan</button>
							<button type="button" class="focus:outline-amber text-white bg-amber-500 hover:bg-amber-800 focus:ring-5 focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Edit</button>
							<button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Hapus</button>
						</div>
					</div>
				</div>
                
                <!-- Chart Placeholder -->
            </main>
        </div>
    </div>
    <script>
        function openModal(image) {
            let modal = document.getElementById("imageModal");
            document.getElementById("modalImage").src = image.src;
            modal.style.display = "flex";
            setTimeout(() => modal.classList.add("show"), 10);
        }
        
        function closeModal() {
            let modal = document.getElementById("imageModal");
            modal.classList.remove("show");
            setTimeout(() => modal.style.display = "none", 300);
        }
    </script>
</body>
</html>

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
            padding: 20px;
            border-radius: 10px;
            color: white;
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
                    <li><a href="#" class="bg-gray-700">Dashboard</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </nav>
        </aside>
    
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            
            <!-- Navbar -->
            <header class="header flex justify-between items-center">
                <h2 class="text-xl font-bold">Dashboard</h2>
                <div class="flex items-center gap-4">
                    <input type="search" placeholder="Search..." class="border px-4 py-1 rounded" />
                    <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                </div>
            </header>
    
            <!-- Content -->
            <main class="p-6">
                <div class="grid grid-cols-4 gap-4">
                    <div class="card bg-blue-500">Users: 26K</div>
                    <div class="card bg-green-500">Income: $6.200</div>
                </div>
                
                <!-- Chart Placeholder -->
                <div class="bg-white mt-6 p-6 rounded-lg shadow-md h-64 flex justify-center items-center">
                    <span class="text-gray-400">[Chart Placeholder]</span>
                </div>
            </main>
        </div>
    </div>
    
</body>
</html>

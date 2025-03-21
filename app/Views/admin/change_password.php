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
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="sidebar sticky z-5 top-0 h-screen bg-gray-800 text-white p-6 w-64 flex-shrink-0">
            <h1 class="text-xl font-bold">KPN</h1>
            <nav class="mt-5">
                <ul>
                    <li class="py-2"><a href="/admin/galery" class="block px-4 py-2 hover:bg-gray-700 ">Galery</a></li>
                    <li class="py-2"><a href="/admin/change-password" class="block px-4 py-2 hover:bg-gray-700 bg-gray-700 rounded">Ubah Password</a></li>
                    <li class="py-2"><a href="/logout" class="block px-4 py-2 hover:bg-red-700 rounded ">
                            <p class="text-red-400">Logout</p>
                        </a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="header sticky top-0 z-5 bg-white shadow-md flex justify-between items-center p-6">
                <h2 class="text-xl font-bold">Ubah Password</h2>

            </header>

            <!-- Scrollable Content -->
            <main class="p-6 flex-1 overflow-y-auto">
                <form method="POST" action="/admin/update-password" enctype="multipart/form-data" onsubmit="return validateForm(event)">
                    <?= csrf_field() ?>
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password Baru</label>
                                    <div class="mt-2 relative">
                                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                            <input type="password" name="password" id="password" class="block min-w-0 grow py-1.5 pr-10 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="password baru">
                                            <button type="button" onclick="togglePassword('password')" class="absolute right-3 text-gray-500 hover:text-gray-700">👁</button>
                                        </div>
                                        <p id="password-error" class="text-red-500 text-sm mt-1 hidden"></p>
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="password2" class="block text-sm/6 font-medium text-gray-900">Konfirmasi Password Baru</label>
                                    <div class="mt-2 relative">
                                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                            <input type="password" name="password2" id="password2" class="block min-w-0 grow py-1.5 pr-10 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="password baru">
                                            <button type="button" onclick="togglePassword('password2')" class="absolute right-3 text-gray-500 hover:text-gray-700">👁</button>
                                        </div>
                                        <p id="password2-error" class="text-red-500 text-sm mt-1 hidden"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>


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
</body>
<script>
    let errorMessage = "";
    // Data for the images
    <?php if (isset($error)): ?>
        errorMessage = "<?= $error ?>";
        alert(errorMessage)
    <?php endif; ?>

    function togglePassword(id) {
        const input = document.getElementById(id);
        input.type = input.type === 'password' ? 'text' : 'password';
    }

    function validateForm(event) {
        const password = document.getElementById('password').value;
        const password2 = document.getElementById('password2').value;
        const passwordError = document.getElementById('password-error');
        const password2Error = document.getElementById('password2-error');
        let valid = true;

        passwordError.classList.add('hidden');
        password2Error.classList.add('hidden');

        if (password.length < 8 || !/[0-9]/.test(password)) {
            passwordError.textContent = 'Password harus minimal 8 karakter dan mengandung setidaknya 1 angka.';
            passwordError.classList.remove('hidden');
            valid = false;
        }

        if (password !== password2) {
            password2Error.textContent = 'Konfirmasi password tidak cocok.';
            password2Error.classList.remove('hidden');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    }
</script>

</html>
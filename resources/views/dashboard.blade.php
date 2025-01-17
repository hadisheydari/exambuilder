<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Dashboard</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-blue-50 text-gray-700">
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    </script>
@endif

@if (session('wrong'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('wrong') }}',
        });
    </script>
@endif

<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-800 text-white flex flex-col shadow-lg">
        <div class="p-6 text-center border-b border-blue-700">
            <h1 class="text-2xl font-bold">Management Panel</h1>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-600 transition">Dashboard</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-600 transition">Users</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-600 transition">Reports</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-600 transition">Settings</a>
        </nav>
        <div class="p-4 border-t border-blue-700">
            <a href="#" class="block px-4 py-2 rounded-lg bg-gray-700 text-center hover:bg-gray-600 transition">Logout</a>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md px-6 py-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold text-blue-700">Management Dashboard</h2>
            </div>
        </header>

        <!-- Main Section -->
        <main class="flex-1 p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center space-x-reverse space-x-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-700">Users</h3>
                    </div>
                    <p class="mt-4 text-gray-600">Number of Users: <span class="font-bold">150</span></p>
                    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
                </div>

                <!-- Card 2 -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center space-x-reverse space-x-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m8 0h-8m0 0V3m0 18v-8m-8 8H3m8 0h11m0-11h-8m8 0V3" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-700">Reports</h3>
                    </div>
                    <p class="mt-4 text-gray-600">Active Reports: <span class="font-bold">20</span></p>
                    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
                </div>

                <!-- Card 3 -->
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center space-x-reverse space-x-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V4m0 12l-4-4m4 4l4-4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-700">Settings</h3>
                    </div>
                    <p class="mt-4 text-gray-600">System Configuration</p>
                    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>

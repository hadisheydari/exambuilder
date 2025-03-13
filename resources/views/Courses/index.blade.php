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
    <x-teacher.teacher_asid>
    </x-teacher.teacher_asid>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md px-6 py-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold text-blue-700">Manage Courses</h2>
            </div>
        </header>

        <!-- Main Section -->
        <div>


            <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
            <main class="flex-1 p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <div class="flex items-center space-x-reverse space-x-4">

                            <h3 class=" text-lg font-semibold text-blue-700 ml-2">Users</h3>
                        </div>
                        <p class="mt-4 text-gray-600">Number of Users: <span class="font-bold">150</span></p>
                        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
                    </div>

                    <!-- Card 2 -->
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <div class="flex items-center space-x-reverse space-x-4">

                            <h3 class="text-lg font-semibold text-blue-700">Reports</h3>
                        </div>
                        <p class="mt-4 text-gray-600">Active Reports: <span class="font-bold">20</span></p>
                        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
                    </div>

                    <!-- Card 3 -->
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <div class="flex items-center space-x-reverse space-x-4">

                            <h3 class="text-lg font-semibold text-blue-700">Settings</h3>
                        </div>
                        <p class="mt-4 text-gray-600">System Configuration</p>
                        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
                    </div>
                </div>
            </main>
        </div>


    </div>
</div>

</body>
</html>

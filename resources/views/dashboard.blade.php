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
@php
    $role = auth()->user()->role;
@endphp

<div class="min-h-screen flex">
    <!-- Sidebar -->

    @if($role === 'teacher')
        <x-admin-aside>
        </x-admin-aside>
    @elseif($role ==='student')
        <x-student-aside>
        </x-student-aside>
    @endif
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md px-6 py-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold text-blue-700">Management Dashboard</h2>
            </div>
        </header>

        <!-- Main Section -->
        @if($role === 'teacher')
            <x-admin-dashboard>
            </x-admin-dashboard>
        @elseif($role ==='student')
            <x-student-dashboard>
            </x-student-dashboard>
        @endif

    </div>
</div>

</body>
</html>

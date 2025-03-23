<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
    @yield('sidebar')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md px-6 py-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold text-blue-700">@yield('header','Laravel app')</h2>
            </div>
        </header>

        <div>
            @yield('content')
        </div>
    </div>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Register for the University System</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="bg-gray-100">
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
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="hidden md:block">
                <img
                    src="../img/infographic_8.jpg"
                    alt="University"
                    class="w-full h-4/6 mt-24 object-cover">
            </div>

            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 align-middle">Register for the System</h2>
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('User.store')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required class="@error('name') border-red-500 @enderror  w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">University Email</label>
                        <input type="email" id="email" name="email" required class="@error('email') border-red-500 @enderror w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="example@university.ac.ir">
                    </div>
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <div class="mb-4">
                        <label for="role" class="block text-gray-700 font-medium mb-2">Select Role</label>
                        <select id="role" name="role" required class="@error('role') border-red-500 @enderror  w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="" disabled selected>Select your role</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>
                    @error('role')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <x-password-input name="password" label="User Password" placeholder="Type your password here" />

                    <x-password-input name="repetPassword" label="User Password" placeholder="Type your password here" />


                    <div class="mb-4">
                        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">Register</button>
                    </div>

                    <div class="text-sm text-gray-600 text-center">
                        <a href="{{ route('login') }}" class="hover:font-bold px-4 subpixel-antialiased">Login to the System</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    document.querySelector('form').addEventListener('submit', function (event) {
        const pass1 = document.getElementById('password').value;
        const pass2 = document.getElementById('repetPassword').value;

        if (pass1 !== pass2) {
            event.preventDefault();
            alert('Passwords do not match.');
        }
    });



</script>
</html>

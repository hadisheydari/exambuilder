<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for the University System</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="bg-gray-100">
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

                    <div class="mb-4 relative">
                        <label for="password" class="@error('password') border-red-500 @enderror block text-gray-700 font-medium mb-2">Password</label>

                        <input type="password" id="password" name="password" required
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                               placeholder="Password">

                        <!-- Eye icon for showing/hiding password -->
                        <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer" onclick="togglePassword()">
        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8zm0 0c-2.485 0-4.5 2.015-4.5 4.5S9.515 15 12 15s4.5-2.015 4.5-4.5S14.485 6 12 6zm0 0c-1.36 0-2.5 1.14-2.5 2.5S10.64 11 12 11s2.5-1.14 2.5-2.5S13.36 6 12 6z"/>
        </svg>
    </span>
                    </div>
                    @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <div class="mb-4">
                        <label for="repetPassword" class="block text-gray-700 font-medium mb-2">Repeat Password</label>
                        <input type="password" id="repetPassword" name="repetPassword" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password">
                    </div>

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
            event.preventDefault(); // Prevent form submission
            alert('Passwords do not match.');
        }
    });


    function togglePassword() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.setAttribute('d', 'M12 6c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8zm0 0c-2.485 0-4.5 2.015-4.5 4.5S9.515 15 12 15s4.5-2.015 4.5-4.5S14.485 6 12 6zm0 0c-1.36 0-2.5 1.14-2.5 2.5S10.64 11 12 11s2.5-1.14 2.5-2.5S13.36 6 12 6z');
        } else {
            passwordField.type = "password";
            eyeIcon.setAttribute('d', 'M12 6c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8zm0 0c-2.485 0-4.5 2.015-4.5 4.5S9.515 15 12 15s4.5-2.015 4.5-4.5S14.485 6 12 6z');
        }
    }
</script>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University System Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="hidden md:block">
                <img
                    src="../img/infographic_8.jpg"
                    alt="University"
                    class="w-full h-full object-cover">
            </div>

            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Login to the System</h2>
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('post-login') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">University Email</label>
                        <input type="email" id="email" name="email" required class="@error('email') border-red-500 @enderror  w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="example@university.ac.ir">
                    </div>
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                        <input type="password" id="password" name="password" required class="@error('password') border-red-500 @enderror  w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password">
                    </div>
                    @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <div class="mb-4">
                        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">Login</button>
                    </div>

                    <div class="text-sm text-gray-600 text-center">
                        <a href="{{ route('register') }}" class="hover:font-bold px-4 subpixel-antialiased">Register</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

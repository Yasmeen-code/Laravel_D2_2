<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6">Register</h1>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Password</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded"> Register</button> 
            <p class="mt-4 text-center text-gray-600">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
            </p>
        </form>
    </div>
</body>
</html>

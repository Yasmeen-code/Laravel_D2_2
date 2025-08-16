<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h1 class="text-2xl font-bold mb-6">Login</h1>

            @if(session('error'))
                <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block mb-1">Email</label>
                    <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block mb-1">Password</label>
                    <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Login</button>
                <p class="mt-4 text-center text-gray-600">
                    Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
                </p>
            </form>
        </div>
    </div>
    
</body>
</html>
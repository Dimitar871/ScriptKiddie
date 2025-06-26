<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Header -->
            <div class="bg-indigo-600 px-6 py-4">
                <h1 class="text-2xl font-bold text-white">Reset Your Password</h1>
            </div>

            <!-- Form Container -->
            <div class="p-6">
                <!-- Status Message -->
                @if (session('status'))
                <div class="mb-4 px-4 py-3 bg-green-100 text-green-700 rounded">
                    {{ session('status') }}
                </div>
                @endif

                <p class="mb-6 text-gray-600">
                    Forgot your password? Enter your email and we'll send you a reset link.
                </p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">
                            Email Address
                        </label>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="your@email.com"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition"
                    >
                        Send Reset Link
                    </button>
                </form>

                <!-- Back to Login -->
                <div class="mt-6 text-center">
                    <a 
                        href="{{ route('login') }}" 
                        class="text-indigo-600 hover:text-indigo-800 text-sm font-medium"
                    >
                        Remember your password? Sign in
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
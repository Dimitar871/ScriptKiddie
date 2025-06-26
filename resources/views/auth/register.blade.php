<x-layout>
    <div class="bg-white p-6 rounded shadow max-w-md mx-auto">
        <h2 class="text-xl mb-4">Register</h2>
        
        <!-- Display form-wide errors -->
        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register">
            @csrf
            
            <!-- Name Field -->
            <div class="mb-4">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" required 
                       class="w-full p-2 border rounded @error('name') border-red-500 @enderror" 
                       value="{{ old('name') }}">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Email Field -->
            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" required 
                       class="w-full p-2 border rounded @error('email') border-red-500 @enderror" 
                       value="{{ old('email') }}">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Password Field -->
            <div class="mb-4">
                <label class="block mb-1">Password</label>
                <input type="password" id="password" name="password" required 
                       class="w-full p-2 border rounded @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Confirm Password Field -->
            <div class="mb-4">
                <label class="block mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                       class="w-full p-2 border rounded">
            </div>

            <!-- Show Password Checkbox -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" onclick="togglePasswords()" 
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ml-2">Show Passwords</span>
                </label>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" 
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ml-2">Stay logged in</span>
                </label>
            </div>
            
            <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full hover:bg-blue-600 transition">
                Register
            </button>
        </form>
    </div>

    <script>
        function togglePasswords() {
            const password = document.getElementById('password');
            const confirm = document.getElementById('password_confirmation');
            const type = password.type === 'password' ? 'text' : 'password';
            password.type = type;
            confirm.type = type;
        }
    </script>
</x-layout>

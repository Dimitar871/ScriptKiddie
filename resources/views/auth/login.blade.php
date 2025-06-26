<x-layout>
    <div class="bg-white p-6 rounded shadow max-w-md mx-auto">
        <h2 class="text-xl mb-4">Login</h2>
        
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                Invalid credentials
            </div>
        @endif
        
        <form method="POST" action="/login">
            @csrf
            
            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded">
            </div>
            
            <div class="mb-4">
                <label class="block mb-1">Password</label>
                <input type="password" id="login_password" name="password" required class="w-full p-2 border rounded">
            </div>

            <!-- Show Password Checkbox -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" onclick="toggleLoginPassword()" 
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ml-2">Show Password</span>
                </label>
            </div>
            
            <div class="mb-4">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
        </form>

        <div class="mt-4 text-center">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-800">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>

    <script>
        function toggleLoginPassword() {
            const input = document.getElementById('login_password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</x-layout>

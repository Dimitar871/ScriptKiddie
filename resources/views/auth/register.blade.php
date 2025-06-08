<x-layout>
    <div class="bg-white p-6 rounded shadow max-w-md mx-auto">
        <h2 class="text-xl mb-4">Register</h2>
        
        <form method="POST" action="/register">
            @csrf
            
            <div class="mb-4">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" required class="w-full p-2 border rounded" value="{{ old('name') }}">
            </div>
            
            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded" value="{{ old('email') }}">
            </div>
            
            <div class="mb-4">
                <label class="block mb-1">Password</label>
                <input type="password" name="password" required class="w-full p-2 border rounded">
            </div>
            
            <div class="mb-4">
                <label class="block mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="w-full p-2 border rounded">
            </div>

            <!-- Add Remember Me checkbox -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="ml-2">Stay logged in</span>
                </label>
            </div>
            
            <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">Register</button>
        </form>
    </div>
</x-layout>
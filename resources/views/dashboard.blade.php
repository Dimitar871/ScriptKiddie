<x-layout>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl mb-4">Dashboard</h2>
        <p>Welcome to your dashboard, {{ auth()->user()->name }}!</p>
        <p class="mt-4">This page is only when yo are logged in!!!</p>
        
        <div class="mt-6">
            <a href="/" class="text-blue-500 hover:text-blue-700">Back to Home</a>
        </div>
    </div>
</x-layout>
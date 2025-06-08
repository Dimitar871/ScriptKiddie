<x-layout>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl mb-4">Welcome</h2>
        
        @auth
            <p>Hello {{ auth()->user()->name }} You're logged in.</p>
            <img src="/images/monkey.webp" alt="Monkey">
        @else
            <p>Please login or register to continue.</p>
        @endauth
    </div>
</x-layout>
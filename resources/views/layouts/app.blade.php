<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <header class="mb-6">
            <h1 class="text-2xl font-bold">My App</h1>
            <nav class="mt-4">
    @auth
        <a href="/" class="mr-4">Home</a>
        <a href="/dashboard" class="mr-4">Dashboard</a>
        <form action="/logout" method="POST" class="inline">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="/login" class="mr-4">Login</a>
        <a href="/register">Register</a>
    @endauth
</nav>
        </header>

        <main>
            {{ $slot }}
        </main>
        @if(session('status'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('status') }}
    </div>
@endif
    </div>
</body>
</html>
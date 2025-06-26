<x-layout>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">{{ $note->title }}</h2>

        <p class="mb-4 text-gray-700">{{ $note->content }}</p>

        <a href="{{ route('notes.index') }}" class="text-blue-500 hover:underline">&larr; Back to notes</a>
    </div>
</x-layout>

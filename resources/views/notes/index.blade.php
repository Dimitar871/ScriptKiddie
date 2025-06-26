<x-layout>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl mb-4">Your Notes</h2>

        @auth
            <p class="mb-4">Hello {{ auth()->user()->name }}. Here are your notes:</p>

            @if ($notes->count())
                <ul class="list-disc list-inside space-y-2">
                    @foreach ($notes as $note)
                        <li>
                            <a href="{{ route('notes.show', $note) }}" class="text-blue-500 hover:underline">
                                {{ $note->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-600">You have no notes yet.</p>
            @endif
        @else
            <p>Please login or register to see your notes.</p>
        @endauth
    </div>
</x-layout>

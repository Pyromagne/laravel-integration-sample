<x-layouts.app :title="$book->title">
    <div class="mb-4">
        <h1 class="text-3xl font-bold">{{ $book->title }}</h1>
        <p class="text-gray-600">by {{ $book->author }}</p>
    </div>

    <div class="space-y-2">
        <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
        <p><strong>Published Year:</strong> {{ $book->published_year }}</p>
        <p><strong>Available Copies:</strong> {{ $book->available_copies }}</p>
    </div>

    <div class="mt-6 flex space-x-4">
        <a href="{{ route('books.edit', $book) }}"
            class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>

        <form action="{{ route('books.destroy', $book) }}" method="POST"
            onsubmit="return confirm('Are you sure you want to delete this book?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
        </form>

        <a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Back to
            list</a>
    </div>
</x-layouts.app>

<x-layouts.app :title="'Edit Book'">
    <div class="max-w-lg mx-auto mt-8">
        <h2 class="text-xl font-semibold mb-4">Edit Book</h2>

        <form method="POST" action="{{ route('books.update', $book) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <x-book-form-fields :book="$book" />

            <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Update</button>
        </form>
    </div>
</x-layouts.app>

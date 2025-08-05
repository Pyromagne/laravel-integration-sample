<x-layouts.app :title="'Add Book'">
    <div class="max-w-lg mx-auto mt-8">
        <h2 class="text-xl font-semibold mb-4">Add New Book</h2>

        <form method="POST" action="{{ route('books.store') }}" class="space-y-4">
            @csrf
            <x-book-form-fields />

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </form>
    </div>
</x-layouts.app>

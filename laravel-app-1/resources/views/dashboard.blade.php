<x-layouts.app :title="__('Dashboard')">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Books</h1>
        <a href="{{ route('books.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Book</a>
    </div>

    <div class="overflow-x-auto rounded border border-neutral-200 dark:border-neutral-700">
        <table class="min-w-full text-sm">
            <thead class="bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300">
                <tr>
                    <th class="px-4 py-2 text-left">Title</th>
                    <th class="px-4 py-2 text-left">Author</th>
                    <th class="px-4 py-2 text-left">ISBN</th>
                    <th class="px-4 py-2 text-left">Year</th>
                    <th class="px-4 py-2 text-left">Copies</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-200 dark:divide-neutral-700">
                @forelse($books as $book)
                    <tr>
                        <td class="px-4 py-2">{{ $book->title }}</td>
                        <td class="px-4 py-2">{{ $book->author }}</td>
                        <td class="px-4 py-2">{{ $book->isbn }}</td>
                        <td class="px-4 py-2">{{ $book->published_year }}</td>
                        <td class="px-4 py-2">{{ $book->available_copies }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('books.show', $book) }}" class="text-blue-600 hover:underline">View</a>
                            <a href="{{ route('books.edit', $book) }}" class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Delete this book?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-2 text-center text-gray-500">No books available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts.app>

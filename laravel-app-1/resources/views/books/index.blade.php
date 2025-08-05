<x-layouts.app :title="__('Books')">
    <div class="p-6">
        <h1 class="text-2xl font-semibold mb-4">Book List</h1>

        <table
            class="min-w-full bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-700 rounded-lg overflow-hidden">
            <thead class="bg-gray-100 dark:bg-neutral-800 text-gray-700 dark:text-gray-300">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Title</th>
                    <th class="px-4 py-2 text-left">Author</th>
                    <th class="px-4 py-2 text-left">ISBN</th>
                    <th class="px-4 py-2 text-left">Published Year</th>
                    <th class="px-4 py-2 text-left">Available Copies</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @forelse ($books as $book)
                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-800">
                        <td class="px-4 py-2">{{ $book->id }}</td>
                        <td class="px-4 py-2">{{ $book->title }}</td>
                        <td class="px-4 py-2">{{ $book->author }}</td>
                        <td class="px-4 py-2">{{ $book->isbn }}</td>
                        <td class="px-4 py-2">{{ $book->published_year }}</td>
                        <td class="px-4 py-2">{{ $book->available_copies }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('books.show', $book) }}" class="text-blue-500 hover:underline">View</a>
                            <a href="{{ route('books.edit', $book) }}" class="text-yellow-500 hover:underline">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline-block"
                                onsubmit="return confirm('Are you sure you want to delete this book?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-4 text-center text-gray-500">No books available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            <a href="{{ route('books.create') }}"
                class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Add New Book
            </a>
        </div>
    </div>
</x-layouts.app>

<x-layouts.app :title="__('Dashboard')">
    <h1 class="text-2xl font-bold mb-6">Books from API</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse($books as $book)
            <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-md overflow-hidden border border-neutral-200 dark:border-neutral-700 hover:shadow-lg transition duration-300">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $book['title'] }}</h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-300">by {{ $book['author'] }}</p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-neutral-400">ISBN: {{ $book['isbn'] }}</p>
                    <p class="text-sm text-gray-500 dark:text-neutral-400">Year: {{ $book['published_year'] }}</p>
                    <p class="text-sm text-gray-500 dark:text-neutral-400">Available: {{ $book['available_copies'] }}</p>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No books available.</p>
        @endforelse
    </div>
</x-layouts.app>

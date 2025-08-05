@props(['book' => null])

<div>
    <label class="block mb-2 font-medium">Title</label>
    <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}"
        class="w-full border rounded px-3 py-2" required>
</div>

<div>
    <label class="block mb-2 font-medium">Author</label>
    <input type="text" name="author" value="{{ old('author', $book->author ?? '') }}"
        class="w-full border rounded px-3 py-2" required>
</div>

<div>
    <label class="block mb-2 font-medium">ISBN</label>
    <input type="text" name="isbn" value="{{ old('isbn', $book->isbn ?? '') }}"
        class="w-full border rounded px-3 py-2" required>
</div>

<div>
    <label class="block mb-2 font-medium">Published Year</label>
    <input type="text" name="published_year" value="{{ old('published_year', $book->published_year ?? '') }}"
        class="w-full border rounded px-3 py-2" required>
</div>

<div>
    <label class="block mb-2 font-medium">Available Copies</label>
    <input type="number" name="available_copies" value="{{ old('available_copies', $book->available_copies ?? '') }}"
        class="w-full border rounded px-3 py-2" required>
</div>

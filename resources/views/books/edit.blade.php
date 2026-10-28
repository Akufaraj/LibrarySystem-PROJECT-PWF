<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul Buku</label><br>
        <input type="text" name="title"
               value="{{ old('title', $book->title) }}" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="author"
               value="{{ old('author', $book->author) }}" required><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="year"
               value="{{ old('year', $book->year) }}"
               min="1000" max="9999" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stock"
               value="{{ old('stock', $book->stock) }}"
               min="0" required><br><br>

        <!-- Pilihan Kategori -->
        <label for="category_id">Kategori</label><br>

        <select name="category_id" id="category_id" required>
            <option value="">Pilih Kategori</option>

            @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    @selected(old('category_id', $book->category_id) == $category->id)
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="{{ route('books.index') }}">Kembali</a>
</body>
</html>
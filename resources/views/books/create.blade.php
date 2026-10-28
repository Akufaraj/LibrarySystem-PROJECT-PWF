<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label>Judul Buku</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <br><br>

        <label>Penulis</label>
        <input type="text" name="author" value="{{ old('author') }}" required>

        <br><br>

        <label>Tahun Terbit</label>
        <input type="number" name="year" value="{{ old('year') }}" required>

        <br><br>

        <label>Stok</label>
        <input type="number" name="stock" min="0" value="{{ old('stock') }}" required>

        <br><br>

        <!-- Pilihan Kategori -->
        <label for="category_id">Kategori</label>

        <select name="category_id" id="category_id" required>
            <option value="">Pilih Kategori</option>

            @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    @selected(old('category_id') == $category->id)
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        @error('category_id')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="{{ route('books.index') }}">Kembali ke Daftar</a>
</body>
</html>

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
    <input type="text" name="title" required>

    <label>Penulis</label>
    <input type="text" name="author" required>

    <label>Tahun Terbit</label>
    <input type="number" name="year" required>

    <label>Stok</label>
    <input type="number" name="stock" min="0" required>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('books.index') }}">Kembali ke Daftar</a>

</body>
</html>

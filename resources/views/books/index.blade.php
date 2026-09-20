@extends('layouts.app')

@section('title' , 'Daftar Buku')


@section('content')
    <h2>Daftar Buku</h2>

    @if(count($books) > 0)
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>{{ $book['judul'] }}</strong><br>
                    Penulis: {{ $book['penulis'] }}<br>
                    Tahun: {{ $book['tahun_terbit'] }}<br>
                    <a href="/books/{{ $book['id'] }}">Lihat Detail</a>
                </li>
                <br>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data buku.</p>
    @endif
@endsection
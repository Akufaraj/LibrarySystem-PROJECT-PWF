@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <h2>Daftar Kategori</h2>

    @if(count($categories) > 0)
        <ul>
            @foreach($categories as $category)
                <li>{{ $category }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada kategori.</p>
    @endif
@endsection
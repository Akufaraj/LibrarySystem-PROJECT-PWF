@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <p><strong>Judul Aplikasi:</strong> {{ $title }}</p>
    <p><strong>Deskripsi:</strong> {{ $description }}</p>

    <h4>Informasi :</h3>
    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
    </ul>
@endsection
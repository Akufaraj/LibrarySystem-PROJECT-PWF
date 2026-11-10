
@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
    <h2>Kelola Pengguna</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

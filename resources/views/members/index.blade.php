@extends('layouts.app')

@section('title' , 'Daftar Member')

@section('content')
    <h2>Daftar Member :</h2>

    @if(count($members) > 0)
        <ol>
            @foreach($members as $member)
                <li>{{ $member }}</li>
            @endforeach
        </ol>
    @else
        <p>Tidak ada member.</p>
    @endif
@endsection
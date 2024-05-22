@extends('layouts.app')

@section('contents')
    <div class="container">
        <h1>{{ $menu->menu_name }}</h1>
        <p>Harga: {{ $menu->price }}</p>
        <p>Keterangan: {{ $menu->description }}</p>
        @if ($menu->foto)
            <img src="{{ asset('uploads/' . $menu->foto) }}" alt="{{ $menu->menu_name }}" width="300">
        @endif
        <a href="{{ route('menus.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
@endsection

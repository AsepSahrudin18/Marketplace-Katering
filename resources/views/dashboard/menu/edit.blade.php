@extends('layouts.app')

@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="menu_name" class="form-label">Nama Menu</label>
                    <input name="menu_name" type="text" class="form-control" id="menu_name" value="{{ $menu->menu_name }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input name="price" type="number" step="0.01" class="form-control" id="price"
                        value="{{ $menu->price }}" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input name="foto" type="file" class="form-control" id="foto">
                    @if ($menu->foto)
                        <img src="{{ asset('uploads/' . $menu->foto) }}" alt="{{ $menu->menu_name }}" width="100"
                            class="mt-2">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Keterangan</label>
                    <textarea name="description" class="form-control" id="description">{{ $menu->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection

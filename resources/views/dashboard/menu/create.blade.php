@extends('layouts.app')

@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="menu_name" class="form-label">Nama Menu</label>
                    <input name="menu_name" type="text" class="form-control" id="menu_name" aria-describedby="menuHelp"
                        required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input name="price" type="number" step="0.01" class="form-control" id="price"
                        aria-describedby="priceHelp" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input name="foto" type="file" class="form-control" id="foto" aria-describedby="fotoHelp">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Keterangan</label>
                    <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

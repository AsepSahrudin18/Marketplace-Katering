@extends('layouts.app')
@section('contents')
    <!--  Header End -->
    <div class="container-fluid">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="card-title fw-semibold mb-4"></h5>
                            <div class="card">
                                <img src="{{ asset('uploads/' . $user->profile_picture) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text">{{ $user->description }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <form action="{{ route('my-account.update') }}" method="post" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                                <h5 class="card-title fw-semibold mb-4"></h5>
                                <div class="card">
                                    <div class="card-header">
                                        Page Edit Profile
                                    </div>

                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="company_name" class="form-label">Company Name</label>
                                            <input disabled value="{{ $user->name }}" name="name" class="form-control"
                                                id="company_name" aria-describedby="fotoHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input disabled value="{{ $user->address }}" name="address" class="form-control"
                                                id="address" aria-describedby="fotoHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="contact" class="form-label">Contact</label>
                                            <input type="number" disabled value="{{ $user->contact }}" name="contact"
                                                class="form-control" id="contact" aria-describedby="fotoHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <input disabled value="{{ $user->description }}" name="description"
                                                class="form-control" id="description" aria-describedby="fotoHelp">
                                        </div>
                                        <input name="role_id" value="{{ $user->role_id }}" hidden>

                                        <div class="mb-3">
                                            <label for="profile_picture" class="form-label">Foto</label>
                                            <input id="profile_picture" disabled name="profile_picture" type="file"
                                                class="form-control" id="profile_picture">
                                            @if ($user->profile_picture)
                                                <img src="{{ asset('uploads/' . $user->profile_picture) }}"
                                                    alt="{{ $user->menu_name }}" width="100" class="mt-2">
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <button id="disable-remove" class="btn btn-secondary">Edit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('disable-remove').addEventListener('click', function(event) {
            const inputs = [
                document.getElementById('company_name'),
                document.getElementById('address'),
                document.getElementById('contact'),
                document.getElementById('description'),
                document.getElementById('profile_picture')
            ];

            const disableTrue = inputs.forEach(function(input) {
                input.removeAttribute('disabled');
            });


            const enableButton = document.getElementById('disable-remove');
            // enableButton.setAttribute('type', 'submit');
            enableButton.removeAttribute('id');

            event.preventDefault();
        });
    </script>
@endsection

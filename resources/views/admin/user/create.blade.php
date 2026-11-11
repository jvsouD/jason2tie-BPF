
@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <h2 class="h4 mb-4">Tambah User</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border-0 shadow">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name"
                           class="form-control"
                           value="{{ old('name') }}"
                           placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                           class="form-control"
                           value="{{ old('email') }}"
                           placeholder="Masukkan email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password"
                           class="form-control"
                           placeholder="Minimal 8 karakter">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">
                        Confirm Password
                    </label>
                    <input type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           class="form-control"
                           placeholder="Ulangi password">
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('user.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection

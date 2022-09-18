@extends('main')



@section('container')

<div class="row justify-content-center">
    <div class="col-md-5 mt-5">
        <main class="form-registration">
            <h2 class="h3 mb-3 fw-normal text-center">Form Registration</h2>
            <form action="/register" method="post">
                @csrf
              <div class="form-floating">
                <input type="name" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="nama_lengkap" value="{{ old('nama_lengkap') }}">
                <label for="nama_lengkap">Nama Lengkap</label>
                @error('nama_lengkap')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              {{-- <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div> --}}
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" id="password" placeholder="password" value="{{ old('password') }}">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-danger" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-3">Sudah Daftar?  <a href="/login" class="text-decoration-none">Login</a> </small>
          </main>
    </div>
</div>

@endsection

@extends('layouts.auth')

@section('title')
    Masuk ke akun anda
@endsection

@section('content')
{{-- @if (session('Message'))
    <script>
         Swal.fire({
          icon: 'error',
          title: 'Afwan!',
          text: 'Akun anda belum diaktifkan!',
        })
    </script>
@endif --}}
<div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img
              src="/images/login-placeholder.jpg"
              class="w-50 mb-4 mb-lg-none"
            />
          </div>
          <div class="col-lg-5">
            <h2>
              Masuk dan temukan calon <br />
              pasangan hidup anda.
            </h2>
            <form action="{{ route('login') }}" method="post" class="mt-3">
            @csrf
              <div class="form-group">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control w-75 @error('email') is-invalid @enderror"
                  value="{{ old('email') }}"
                  required
                  autocomplete="email"
                  autofocus
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control w-75 @error('password') is-invalid @enderror"
                  required autocomplete="current-password"
                />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-success btn-block w-75 mt-4">
                Masuk ke akun saya
              </button>
              <a href="{{ route('register') }}" class="btn btn-signup btn-block w-75 mt-2">
                Daftar akun baru
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection


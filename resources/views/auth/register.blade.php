@extends('layouts.auth')

@section('title')
    Daftar Akun Baru
@endsection

@section('content')

<div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
          <div class="col-lg-4">
            <h2>
              Masukkan data diri anda secara lengkap !
              
            </h2>
            <form action="{{ route('register') }}" method="post" class="mt-3">
                @csrf
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="form-control is-valid @error('name') is-invalid @enderror"
                  v-model="name"
                  autofocus
                  value="{{ old('name') }}" required autocomplete="name"
                />
                
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control @error('email') is-invalid @enderror"
                  v-model="email"
                  value="{{ old('email') }}" required autocomplete="email"
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
                  class="form-control @error('password') is-invalid @enderror"
                  required 
                />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="biodata">Biodata Ikhwa</label>
                <input
                  type="file"
                  name="biodata"
                  id="biodata"
                  class="form-control @error('biodata') is-invalid @enderror"
                  required 
                />
                <small class="text-muted">dokumen biodata lengkap anda
                </small>
                @error('biodata')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="rekomendasi_murobbi">Surat Rekomendasi Murobbi</label>
                <input
                  type="file"
                  name="rekomendasi_murobbi"
                  id="rekomendasi_murobbi"
                  class="form-control @error('rekomendasi_murobbi') is-invalid @enderror"
                  required 
                />
                <small class="text-muted">surat keterangan dari murobbi, bahwa aktif
                    tarbiyah minimal 3 bulan</small>

                @error('rekomendasi_murobbi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="keterangan_nikah">Surat Keterangan Nikah</label>
                <input
                  type="file"
                  name="keterangan_nikah"
                  id="keterangan_nikah"
                  class="form-control @error('keterangan_nikah') is-invalid @enderror"
                  required 
                />
                <small class="text-muted">surat keterangan persetujuan nikah dari wali
                </small>
                @error('keterangan_nikah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="keterangan_sehat">Surat Berbadan Sehat</label>
                <input
                  type="file"
                  name="keterangan_sehat"
                  id="keterangan_sehat"
                  class="form-control @error('keterangan_sehat') is-invalid @enderror"
                  required 
                />
                <small class="text-muted">surat keterangan sehat dari dokter
                </small>
                @error('keterangan_sehat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <button type="submit" class="btn btn-success btn-block mt-4">
                Daftar Akun
              </button>
              <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2">
                Sudah punya akun
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

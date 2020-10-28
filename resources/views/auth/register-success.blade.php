@extends('layouts.auth')

@section('title')
    Sukses Daftar Akun Baru
@endsection

@section('content')
<div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="/images/success.jpg" class="mb-4" width="200" />
            <h2>Selamat Datang !</h2>
            <p>
              Kamu sudah berhasil terdaftar bersama kami. <br />
              Silahkan tunggu beberapa saat untuk dapat memilih calon pasangan anda.
            </p>
            <div>
              {{-- <a href="{{ route('profile') }}" class="btn btn-success w-50 mt-4"
                >Lihat Profil Saya</a
              >
              <a href="{{ route('login') }}" class="btn btn-secondary w-50 mt-4"
                >Masuk Akun</a
              > --}}
              <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" 
                class="btn btn-success w-50 mt-4">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

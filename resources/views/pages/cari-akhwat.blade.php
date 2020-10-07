@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Daftar Calon Pasangan</h2>
    <p class="dashboard-subtitle">Cari dan temukan calon pasangan yang sesuai dengan <br> kriteria yang anda harapkan.</p>
  </div>
  <div class="dashboard-content">
    <button class="btn btn-success mt-2 mb-3">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
    </svg> Cari Calon</button>
    <div class="row mt-2">
      <div class="col-12 col-md-10">
        <div class="card card-list">
          <div class="card-body">
            <div class="row">
              
              <div class="col-6">
                Zahra Fitriani Firdaus
              </div>
              <div class="col-3">
                22 Tahun
              </div>
              <div class="col-3">
                <a href="#" class="btn btn-secondary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12 col-md-10">
        <div class="card card-list">
          <div class="card-body">
            <div class="row">
              
              <div class="col-6">
                Siti Mutmainnah
              </div>
              <div class="col-3">
                23 Tahun
              </div>
              <div class="col-3">
                <a href="#" class="btn btn-secondary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12 col-md-10">
        <div class="card card-list">
          <div class="card-body">
            <div class="row">
              
              <div class="col-6">
                Wahyuni 
              </div>
              <div class="col-3">
                21 Tahun
              </div>
              <div class="col-3">
                <a href="#" class="btn btn-secondary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
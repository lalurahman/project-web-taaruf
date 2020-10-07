@extends('layouts.admin')

@section('title')
    Dashboard Admin
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Dashboard</h2>
    <p class="dashboard-subtitle">Selamat datang !</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-2">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="/images/man.png" alt="" width="100">
              </div>
              <div class="col-8">
                <div class="dashboard-card-title">
                  Ikhwan
                </div>
                <div class="dashboard-card-subtitle">
                  120 <small>orang</small>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-2">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="/images/woman.png" alt="" width="100">
              </div>
              <div class="col-8">
                <div class="dashboard-card-title">
                  Akhwat
                </div>
                <div class="dashboard-card-subtitle">
                  150 <small>orang</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-2">
          <div class="card-body">
            <div class="dashboard-card-title">
              Ikhwa belum diverifikasi
            </div>
            <div class="dashboard-card-subtitle">
              2560 <small>orang</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- content --}}
  </div>
</div>
</div>
@endsection
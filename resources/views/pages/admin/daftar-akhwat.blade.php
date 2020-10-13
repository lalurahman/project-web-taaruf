@extends('layouts.admin')

@section('title')
    Daftar Akhwat
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Daftar Akhwat</h2>
    <p class="dashboard-subtitle">Tambahkan data akhwat!</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('tambah-akhwat') }}" class="btn btn-success mb-3" >Tambah Data Akhwat</a>
            <table class="table">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nomor HP</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Azizah Nur Safitri</td>
                  <td>0858268723642</td>
                  <td>Jln. Bahagia Selalu</td>
                  <td>
                    <a href="{{ route('details-akhwat') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                  </td>
              </tr>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

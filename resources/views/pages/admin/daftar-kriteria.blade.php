@extends('layouts.admin')

@section('title')
    Daftar Kriteria
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Daftar Kriteria</h2>
    <p class="dashboard-subtitle">Data kriteria akhwat!</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-4">         
            <div class="card">
                <div class="card-body">
                  <a href="#" class="btn btn-sm btn-secondary px-4 mb-2">Tambah Data</a>

                  <h5>Keterampilan :</h5>
                  <table class="table table-hover">
                    <tr>
                      <td>Memasak</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Memasak</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Memasak</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
        <div class="col-4">         
            <div class="card">
                <div class="card-body">
                  
                  <a href="#" class="btn btn-sm btn-secondary px-4 mb-2">Tambah Data</a>
                  <h5>Asal Suku :</h5>
                  <table class="table table-hover">
                    <tr>
                      <td>Bugis</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Jawa</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                    
                  </table>
                </div>
            </div>
        </div>
        <div class="col-4">         
            <div class="card">
                <div class="card-body">
                  <a href="#" class="btn btn-sm btn-secondary px-4 mb-2">Tambah Data</a>

                  <h5>Tinggi Badan :</h5>
                  <table class="table table-hover">
                    <tr>
                      <td>Pendek</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>Tinggi</td>
                      <td>
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection

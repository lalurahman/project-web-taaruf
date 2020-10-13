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
        <div class="col-12">
            <button type="button" class="btn btn-success mb-3">Tambah Kriteria</button>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jenis Kriteria</th>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Keterampilan</td>
                            <td>
                                <ol>
                                    <li>Memasak</li>
                                    <li>Mencuci</li>
                                    <li>Menjahit</li>
                                </ol>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Asal Suku</td>
                            <td>
                                <ol>
                                    <li>Bugis</li>
                                    <li>Jawa</li>
                                    <li>Sasak Lombok</li>
                                    <li>Mamuju</li>
                                </ol>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Tinggi badan (berdasarkan range)</td>
                            <td>
                                <ol>
                                    <li>Pendek (140cm - 145cm)</li>
                                    <li>Sedang (154cm -166cm)</li>
                                    <li>Tinggi (167cm - 180cm)</li>
                                </ol>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
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

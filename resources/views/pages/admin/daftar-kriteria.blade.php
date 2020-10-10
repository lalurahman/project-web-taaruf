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
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#daftarKriteriaModel">Tambah Kriteria</button>
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
                                <a href="#" class="badge badge-info">edit</a>
                                <a href="#" class="badge badge-danger">hapus</a>
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
                                <a href="#" class="badge badge-info">edit</a>
                                <a href="#" class="badge badge-danger">hapus</a>
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
                                <a href="#" class="badge badge-info">edit</a>
                                <a href="#" class="badge badge-danger">hapus</a>
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

@push('prepend')
{{-- modal --}}
<div class="modal fade" id="daftarKriteriaModel" tabindex="-1" aria-labelledby="daftarKriteriaModelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarKriteriaModelLabel">Pilih Kriteria Calon Pasangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Jenis Kriteria</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Kriteria</label>
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control" name="" id="">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary">+</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success px-5">Simpan Kriteria</button>
      </div>
    </div>
  </div>
</div>
@endpush

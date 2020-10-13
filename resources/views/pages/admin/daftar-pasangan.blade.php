@extends('layouts.admin')

@section('title')
    Daftar Pasangan
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Daftar Pasangan</h2>
    <p class="dashboard-subtitle">Daftar Pasangan!</p>
  </div>

  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#pasanganModal">Tambah Pasangan</button>
            <table class="table">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Ikhwan</th>
                  <th scope="col">Nama Akhwat</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Jhon Whick</td>
                  <td>Susan Susanti</td>
                  <td>Taaruf</td>
                  <td>
                    <a href="{{ route('details-pasangan') }}" class="btn btn-primary btn-sm">Lihat Detail</a>
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

@push('prepend')
{{-- modal --}}
<div class="modal fade" id="pasanganModal" tabindex="-1" aria-labelledby="pasanganModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pasanganModalLabel">Masukkan Pasangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="form-group">
            <label for="">Nama Ikhwan</label>
            <input type="text" name="" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Nama Akhwat</label>
            <input type="text" name="" id="" class="form-control">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="custom-select">
              <option selected>Pilih Status</option>
              <option value="1">Taaruf</option>
              <option value="1">Menikah</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success px-5">Tambah Pasangan</button>
      </div>
    </div>
  </div>
</div>
@endpush
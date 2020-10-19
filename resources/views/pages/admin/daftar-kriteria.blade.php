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
        {{-- keterampilan --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#keterampilanModal">Tambah Data</button>
                  <h5>Keterampilan :</h5>
                  <table class="table table-hover">
                    @foreach ($keterampilan as $item)
                    <tr>
                      <td>{{ $item->keterampilan }}</td>
                      <td class="text-right">
                        <a href="#" class="badge badge-info">edit</a>
                        <a href="#" class="badge badge-danger">hapus</a>
                      </td>
                    </tr>
                    @endforeach
                    
                  </table>
                </div>
            </div>
        </div>

        {{-- suku --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#sukuModal">Tambah Data</button>
                  <h5>Asal Suku :</h5>
                  <table class="table table-hover">
                      @foreach ($suku as $item)
                        <tr>
                          <td>{{ $item->suku }}</td>
                          <td class="text-right">
                            <a href="#" class="badge badge-info">edit</a>
                            <a href="#" class="badge badge-danger">hapus</a>
                          </td>
                        </tr>
                      @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- tinggi badan --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#tinggiBadanModal">Tambah Data</button>

                  <h5>Tinggi Badan :</h5>
                  <table class="table table-hover">
                    @foreach ($tinggi as $item)
                      <tr>
                        <td>{{ $item->tinggi }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- berat badan --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#tubuhModal">Tambah Data</button>

                  <h5>Berat Badan (dalam range) :</h5>
                  <table class="table table-hover">
                    @foreach ($tubuh as $item)
                      <tr>
                        <td>{{ $item->tubuh }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- organisasi --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#organisasiModal">Tambah Data</button>

                  <h5>Organisasi :</h5>
                  <table class="table table-hover">
                    @foreach ($organisasi as $item)
                      <tr>
                        <td>{{ $item->organisasi }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- jenjang pendidikan --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#pendidikanModal">Tambah Data</button>

                  <h5>Jenjang Pendidikan :</h5>
                  <table class="table table-hover">
                    @foreach ($pendidikan as $item)
                      <tr>
                        <td>{{ $item->pendidikan }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- jenis rambut --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#rambutModal">Tambah Data</button>

                  <h5>Jenis Rambut :</h5>
                  <table class="table table-hover">
                    @foreach ($rambut as $item)
                      <tr>
                        <td>{{ $item->rambut }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- pekerjaan --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#pekerjaanModal">Tambah Data</button>

                  <h5>Pekerjaan :</h5>
                  <table class="table table-hover">
                    @foreach ($pekerjaan as $item)
                      <tr>
                        <td>{{ $item->pekerjaan }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- warna kulit --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#kulitModal">Tambah Data</button>

                  <h5>Warna Kulit :</h5>
                  <table class="table table-hover">
                    @foreach ($kulit as $item)
                      <tr>
                        <td>{{ $item->kulit }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- golongan darah --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#darahModal">Tambah Data</button>

                  <h5>Golongan Darah :</h5>
                  <table class="table table-hover">
                    @foreach ($darah as $item)
                      <tr>
                        <td>{{ $item->darah }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- bentuk wajah --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#wajahModal">Tambah Data</button>

                  <h5>Bentuk Wajah :</h5>
                  <table class="table table-hover">
                    @foreach ($wajah as $item)
                      <tr>
                        <td>{{ $item->wajah }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
                  </table>
                </div>
            </div>
        </div>

        {{-- usia nikah ideal --}}
        <div class="col-12 col-md-6 mb-4">         
            <div class="card">
                <div class="card-body">
                  <button type="button" class="btn btn-sm btn-secondary px-4 mb-2" data-toggle="modal" data-target="#nikahModal">Tambah Data</button>

                  <h5>Usia Nikah Ideal :</h5>
                  <table class="table table-hover">
                    @foreach ($nikah as $item)
                      <tr>
                        <td>{{ $item->usia }}</td>
                        <td class="text-right">
                          <a href="#" class="badge badge-info">edit</a>
                          <a href="#" class="badge badge-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach                    
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
{{-- modal keterampilan --}}
<div class="modal fade" id="keterampilanModal" tabindex="-1" aria-labelledby="keterampilanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="keterampilanModalLabel">Tambah Keterampilan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('keterampilan.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="keterampilan">Nama Keterampilan</label>
            <input type="text" name="keterampilan" id="keterampilan" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


{{-- modal suku --}}
<div class="modal fade" id="sukuModal" tabindex="-1" aria-labelledby="sukuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sukuModalLabel">Tambah Suku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('suku.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="suku">Nama Suku</label>
            <input type="text" name="suku" id="suku" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal tinggi badan --}}
<div class="modal fade" id="tinggiBadanModal" tabindex="-1" aria-labelledby="tinggiBadanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tinggiBadanModalLabel">Tambah Tinggi Badan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('tinggi.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="tinggi">Tinggi Badan</label>
            <input type="text" name="tinggi" id="tinggi" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal berat badan/tubuh --}}
<div class="modal fade" id="tubuhModal" tabindex="-1" aria-labelledby="tubuhModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tubuhModalLabel">Tambah Berat Badan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('tubuh.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="tubuh">Berat Badan</label>
            <input type="text" name="tubuh" id="tubuh" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal organisasi --}}
<div class="modal fade" id="organisasiModal" tabindex="-1" aria-labelledby="organisasiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="organisasiModalLabel">Tambah Organisasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('organisasi.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="organisasi">Tambah Organisasi</label>
            <input type="text" name="organisasi" id="organisasi" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal pendidikan --}}
<div class="modal fade" id="pendidikanModal" tabindex="-1" aria-labelledby="pendidikanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pendidikanModalLabel">Tambah Pendidikan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('pendidikan.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="pendidikan">Tambah Pendidikan</label>
            <input type="text" name="pendidikan" id="pendidikan" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal rambut --}}
<div class="modal fade" id="rambutModal" tabindex="-1" aria-labelledby="rambutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rambutModalLabel">Tambah Jenis Rambut</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('rambut.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="rambut">Tambah Jenis Rambut</label>
            <input type="text" name="rambut" id="rambut" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


{{-- modal pekerjaan --}}
<div class="modal fade" id="pekerjaanModal" tabindex="-1" aria-labelledby="pekerjaanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pekerjaanModalLabel">Tambah Pekerjaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('pekerjaan.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="pekerjaan">Tambah Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


{{-- modal warna kulit --}}
<div class="modal fade" id="kulitModal" tabindex="-1" aria-labelledby="kulitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="kulitModalLabel">Tambah Warna Kulit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('kulit.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="kulit">Tambah Warna Kulit</label>
            <input type="text" name="kulit" id="kulit" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal golongan darah --}}
<div class="modal fade" id="darahModal" tabindex="-1" aria-labelledby="darahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="darahModalLabel">Tambah Golongan Darah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('darah.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="darah">Tambah Golongan Darah</label>
            <input type="text" name="darah" id="darah" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal usia nikah ideal --}}
<div class="modal fade" id="nikahModal" tabindex="-1" aria-labelledby="nikahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nikahModalLabel">Tambah Usia Nikah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('nikah.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="usia">Tambah Usia Nikah Ideal</label>
            <input type="text" name="usia" id="usia" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal bentuk wajah --}}
<div class="modal fade" id="wajahModal" tabindex="-1" aria-labelledby="wajahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="wajahModalLabel">Tambah Bentuk Wajah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('wajah.store') }}" method="post">
      <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="wajah">Tambah Bentuk Wajah</label>
            <input type="text" name="wajah" id="wajah" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endpush

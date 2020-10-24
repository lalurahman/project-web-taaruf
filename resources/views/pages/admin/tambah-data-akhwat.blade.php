@extends('layouts.admin')

@section('title')
    Daftar Akhwat
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Daftar Akhwat</h2>
            <p class="dashboard-subtitle">Tambahkan data akhwat!</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('daftar-akhwat') }}" class="btn btn-secondary px-5 mb-3">
                        Kembali
                    </a>
                    <form action="{{ route('storeAkhwat') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name" />
                                            @error('name')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="number" name="no_hp" class="form-control">
                                            @error('no_hp')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control">
                                            @error('alamat')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="biodata">Biodata</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="biodata"
                                                        aria-describedby="inputGroupFileAddon01" name="biodata">
                                                    <label class="custom-file-label" for="biodata">Masukkan biodata
                                                        (pdf)</label>
                                                </div>
                                            </div>
                                            @error('biodata')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="keterampilan" class="d-block">Keterampilan</label>
                                            @foreach ($keterampilan as $item)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="{{ $item->keterampilan }}" name="keterampilan[]">
                                                <label class="form-check-label" for="memasak" style="text-transform: capitalize;">
                                                    {{ $item->keterampilan }}
                                                </label>
                                            </div>
                                            @endforeach
                                            @error('keterampilan')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Asal Suku</label>
                                            <select class="custom-select" name="suku">
                                                <option selected disabled>Pilih Asal Suku</option>
                                                @foreach ($suku as $item)
                                                <option value="{{ $item->suku }}" style="text-transform: capitalize;">{{ $item->suku }}</option>
                                                @endforeach
                                            </select>
                                            @error('suku')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Tinggi Badan </label>
                                            <select class="custom-select" name="tinggi">
                                                <option selected disabled>Pilih Tinggi Badan</option>
                                                @foreach ($tinggi as $item)
                                                    @if ($item->tinggi == 'pendek')
                                                    <option value="{{ $item->tinggi }}" style="text-transform: capitalize;">{{ $item->tinggi }} : 140-153 cm</option>
                                                    @endif
                                                    @if ($item->tinggi == 'sedang')
                                                    <option value="{{ $item->tinggi }}" style="text-transform: capitalize;">{{ $item->tinggi }} : 154-166 cm</option>
                                                    @endif
                                                    @if ($item->tinggi == 'tinggi')
                                                    <option value="{{ $item->tinggi }}" style="text-transform: capitalize;">{{ $item->tinggi }} : 167-180 cm</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('tinggi')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Berat Badan (Berdasarkan range)</label>
                                            <select class="custom-select" name="tubuh">
                                                <option selected disabled>Pilih Berat Badan</option>
                                                @foreach ($tubuh as $item)
                                                    @if ($item->tubuh == 'kurus')
                                                    <option value="{{ $item->tubuh }}" style="text-transform: capitalize;">{{ $item->tubuh }} : 45-54 kg</option>
                                                    @endif
                                                    @if ($item->tubuh == 'normal')
                                                    <option value="{{ $item->tubuh }}" style="text-transform: capitalize;">{{ $item->tubuh }} : 55-64 kg</option>
                                                    @endif
                                                    @if ($item->tubuh == 'gemuk')
                                                    <option value="{{ $item->tubuh }}" style="text-transform: capitalize;">{{ $item->tubuh }} : 65 > kg</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('tubuh')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Organisasi</label>
                                            <select class="custom-select" name="organisasi">
                                                <option selected disabled>Pilih Jabatan Organisasi</option>
                                                @foreach ($organisasi as $item)
                                                <option value="{{ $item->organisasi }}" style="text-transform: capitalize;">{{ $item->organisasi }}</option>
                                                @endforeach
                                            </select>
                                            @error('organisasi')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Rambut</label>
                                            <select class="custom-select" name="rambut">
                                                <option selected disabled>Pilih Jenis Rambut</option>
                                                @foreach ($rambut as $item)
                                                <option value="{{ $item->rambut }}" style="text-transform: capitalize;">{{ $item->rambut }}</option>
                                                @endforeach
                                            </select>
                                            @error('rambut')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <select class="custom-select" name="pendidikan">
                                                <option selected disabled>Pilih Pendidikan terakhir</option>
                                                @foreach ($pendidikan as $item)
                                                <option value="{{ $item->pendidikan }}" style="text-transform: capitalize;">{{ $item->pendidikan }}</option>
                                                @endforeach
                                            </select>
                                            @error('pendidikan')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <select class="custom-select" name="pekerjaan">
                                                <option selected disabled>Pilih Pekerjaan</option>
                                                @foreach ($pekerjaan as $item)
                                                <option value="{{ $item->pekerjaan }}" style="text-transform: capitalize;">{{ $item->pekerjaan }}</option>
                                                @endforeach
                                            </select>
                                            @error('pekerjaan')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Warna Kulit</label>
                                            <select class="custom-select" name="kulit">
                                                <option selected disabled>Pilih Warna Kulit</option>
                                                @foreach ($kulit as $item)
                                                <option value="{{ $item->kulit }}" style="text-transform: capitalize;">{{ $item->kulit }}</option>
                                                @endforeach
                                            </select>
                                            @error('kulit')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select class="custom-select" name="darah">
                                                <option selected disabled>Pilih Golongan Darah</option>
                                                @foreach ($darah as $item)
                                                <option value="{{ $item->darah }}" style="text-transform: capitalize;">{{ $item->darah }}</option>
                                                @endforeach
                                            </select>
                                            @error('darah')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Bentuk Wajah</label>
                                            <select class="custom-select" name="wajah">
                                                <option selected disabled>Pilih Bentuk Wajah</option>
                                                @foreach ($wajah as $item)
                                                <option value="{{ $item->wajah }}" style="text-transform: capitalize;">{{ $item->wajah }}</option>
                                                @endforeach
                                            </select>
                                            @error('wajah')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Usia Nikah ideal</label>
                                            <select class="custom-select" name="nikah">
                                                <option selected disabled>Pilih Usia Nikah ideal</option>
                                                @foreach ($nikah as $item)
                                                    @if ($item->usia == 'ideal')
                                                    <option value="{{ $item->usia }}" style="text-transform: capitalize;">{{ $item->usia }} : 19-25 tahun</option>
                                                    @endif
                                                    @if ($item->usia == 'cukup')
                                                    <option value="{{ $item->usia }}" style="text-transform: capitalize;">{{ $item->usia }} : 26-30 tahun</option>
                                                    @endif
                                                    @if ($item->usia == 'waspadah')
                                                    <option value="{{ $item->usia }}" style="text-transform: capitalize;">{{ $item->usia }} : 31 > tahun</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('nikah')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Riwayat Penyakit</label>
                                            <input type="text" class="form-control" name="riwayat_penyakit">
                                            @error('riwayat_penyakit')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ $message }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col text-right">

                                        <button type="submit" class="btn btn-success px-5">
                                            Tambah Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

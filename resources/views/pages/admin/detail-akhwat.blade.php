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
                    <form action="{{ route('updatedAkhwat') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $akhwat->id }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ $akhwat->nama }}" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="number" name="no_hp" value="{{ $akhwat->no_hp }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" value="{{ $akhwat->alamat }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="biodata">Biodata</label>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="biodata"
                                                                aria-describedby="inputGroupFileAddon01"
                                                                value="" name="biodata">
                                                            <label class="custom-file-label" for="biodata">Masukkan biodata</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                <a href="{{ url('assets/upload/biodata/akhwat/'. $akhwat->cv) }}" target="_blank" class="btn btn-secondary">Lihat</a>
                                                </div>
                                            </div>
                                            <small class="text-muted">{{ $akhwat->cv }}</small>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="keterampilan" class="d-block">Keterampilan</label>
                                            @foreach ($keterampilan as $item)
                                            <div class="form-check form-check-inline">
                                                @forelse($item->akhwats as $skill)
                                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="keterampilan[]" checked>
                                                @empty
                                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="keterampilan[]">
                                                @endforelse
                                                <label class="form-check-label" for="{{ $item->keterampilan }}" style="text-transform: capitalize;">
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
                                                <option disabled>Pilih Asal Suku</option>
                                                @foreach ($suku as $item)
                                                    @if ($akhwat->suku_id == $item->id)
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->suku }}</option>
                                                    @else
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->suku }}</option>
                                                    @endif
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
                                                <option disabled>Pilih Tinggi Badan</option>
                                                @foreach ($tinggi as $item)
                                                    @if ($akhwat->tinggi_id == $item->id)
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->tinggi }} :
                                                        @if ($item->tinggi == 'pendek')
                                                        140-153 cm
                                                        @endif
                                                        @if ($item->tinggi == 'sedang')
                                                        154-166 cm
                                                        @endif
                                                        @if ($item->tinggi == 'tinggi')
                                                        167-180 cm
                                                        @endif
                                                    </option>
                                                    @else
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->tinggi }} :
                                                        @if ($item->tinggi == 'pendek')
                                                        140-153 cm
                                                        @endif
                                                        @if ($item->tinggi == 'sedang')
                                                        154-166 cm
                                                        @endif
                                                        @if ($item->tinggi == 'tinggi')
                                                        167-180 cm
                                                        @endif                                                        {{-- {{ $loop->index }} --}}
                                                    </option>
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
                                                <option disabled>Pilih Berat Badan</option>
                                                @foreach ($tubuh as $item)
                                                    @if ($akhwat->tubuh_id == $item->id)
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->tubuh }} :
                                                        @if ($item->tubuh == 'kurus')
                                                        45-54 kg
                                                        @endif
                                                        @if ($item->tubuh == 'normal')
                                                        55-64 kg
                                                        @endif
                                                        @if ($item->tubuh == 'gemuk')
                                                        65 > kg
                                                        @endif
                                                    </option>
                                                    @else
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->tubuh }} :
                                                        @if ($item->tubuh == 'kurus')
                                                        45-54 kg
                                                        @endif
                                                        @if ($item->tubuh == 'normal')
                                                        55-64 kg
                                                        @endif
                                                        @if ($item->tubuh == 'gemuk')
                                                        65 > kg
                                                        @endif                                                        {{-- {{ $loop->index }} --}}
                                                    </option>
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
                                                <option disabled>Pilih Jabatan Organisasi</option>
                                                @foreach ($organisasi as $item)
                                                @if ($akhwat->organisasi_id == $item->id )
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->organisasi }}</option>
                                                @else
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->organisasi }}</option>
                                                @endif
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
                                                @if ($akhwat->rambut_id == $item->id)
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->rambut }}</option>
                                                @else
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->rambut }}</option>
                                                @endif
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
                                                @if ($akhwat->pendidikan_id == $item->id)
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->pendidikan }}</option>
                                                @else
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->pendidikan }}</option>
                                                @endif
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
                                                @if ($akhwat->pekerjaan_id == $item->id)
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->pekerjaan }}</option>
                                                @else
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->pekerjaan }}</option>
                                                @endif
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
                                                @if ($akhwat->kulit_id == $item->id)
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->kulit }}</option>
                                                @else
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->kulit }}</option>
                                                @endif
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
                                                @if ($akhwat->darah_id == $item->id)
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->darah }}</option>
                                                @else
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->darah }}</option>
                                                @endif
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
                                                @if ($akhwat->wajah_id == $item->id)
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->wajah }}</option>
                                                @else
                                                <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->wajah }}</option>
                                                @endif
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
                                                    @if ($akhwat->nikah_id == $item->id)
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;" selected>{{ $item->usia }} :
                                                        @if ($item->usia == 'ideal')
                                                        19-25 tahun
                                                        @endif
                                                        @if ($item->usia == 'cukup')
                                                        26-30 tahun
                                                        @endif
                                                        @if ($item->usia == 'waspadah')
                                                        31 > tahun
                                                        @endif
                                                    </option>
                                                    @else
                                                    <option value="{{ $item->id }}" style="text-transform: capitalize;">{{ $item->usia }} :
                                                        @if ($item->usia == 'ideal')
                                                        19-25 tahun
                                                        @endif
                                                        @if ($item->usia == 'cukup')
                                                        26-30 tahun
                                                        @endif
                                                        @if ($item->usia == 'tinggi')
                                                        31 > tahun
                                                        @endif                                                        {{-- {{ $loop->index }} --}}
                                                    </option>
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
                                            <input type="text" class="form-control" name="riwayat_penyakit" value="{{ $akhwat->riwayat_penyakit }}">
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
                                            Perbarui Data Akhwat
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

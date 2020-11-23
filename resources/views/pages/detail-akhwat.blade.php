@extends('layouts.admin')

@section('title')
    Biodata Akhwat
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Biodata Akhwat</h2>
            <p class="dashboard-subtitle">Biodata calon pasangan anda!</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('cari-akhwat') }}" class="btn btn-secondary px-5 mb-3">
                        Kembali
                    </a>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" name="id" value="{{ $akhwat->id }}"> --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ $akhwat->nama }}" readonly />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="text" name="no_hp" value="{{ substr($akhwat->no_hp,0,8) . "XXXX" }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" value="{{ $akhwat->alamat }}"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="biodata">Biodata</label>
                                            <div class="row">
                                                <div class="col-10">
                                                    <p class="text-muted">{{ $akhwat->cv }}</p>
                                                </div>
                                                <div class="col-2">
                                                <a href="{{ url('assets/upload/biodata/akhwat/'. $akhwat->cv) }}" target="_blank" class="btn btn-secondary">Lihat</a>
                                                </div>
                                            </div>
                                            <small class="text-muted"></small>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="keterampilan" class="d-block">Keterampilan</label>
                                            @foreach ($keterampilan as $item)
                                                                                              
                                                @foreach ($item->akhwats as $skills)  
                                                    <div class="badge badge-success mr-1 px-2 py-1">{{ $item->keterampilan }}</div>
                                                @endforeach
                                                
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Asal Suku</label>
                                            @foreach ($suku as $item)
                                                @if ($akhwat->suku_id == $item->id)
                                                    <input type="text" class="form-control" readonly value="{{ $item->suku }}">
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Tinggi Badan </label>
                                            @foreach ($tinggi as $item)
                                                @if ($akhwat->tinggi_id == $item->id)
                                                    @if ($item->tinggi == 'pendek')
                                                    <input type="text" class="form-control" readonly value="Pendek : 140-153 cm">
                                                    @endif
                                                    @if ($item->tinggi == 'sedang')
                                                    <input type="text" class="form-control" readonly value="Sedang : 154-166 cm">
                                                    
                                                    @endif
                                                    @if ($item->tinggi == 'tinggi')
                                                    <input type="text" class="form-control" readonly value="Tinggi : 167-180 cm">
                                                    
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Berat Badan (Berdasarkan range)</label>
                                            @foreach ($tubuh as $item)
                                                @if ($akhwat->tubuh_id == $item->id)
                                                    @if ($item->tubuh == 'kurus')
                                                    <input type="text" class="form-control" readonly value="Kurus : 45-54 kg">
                                                    @endif
                                                    @if ($item->tubuh == 'normal')
                                                    <input type="text" class="form-control" readonly value="Normal : 55-64 kg">
                                                    
                                                    @endif
                                                    @if ($item->tubuh == 'gemuk')
                                                    <input type="text" class="form-control" readonly value="Gemuk : 65 > kg">
                                                    
                                                    @endif
                                                @endif
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Organisasi</label>
                                            @foreach ($organisasi as $item)
                                                @if ($akhwat->organisasi_id == $item->id)
                                                    
                                                    <input type="text" class="form-control" readonly value="{{ $item->organisasi }}">
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Rambut</label>
                                            @foreach ($rambut as $item)
                                                @if ($akhwat->rambut_id == $item->id)
                                                    
                                                    <input type="text" class="form-control" readonly value="{{ $item->rambut }}">
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            @foreach ($pendidikan as $item)
                                                @if ($akhwat->pendidikan_id == $item->id)
                                                    
                                                    <input type="text" class="form-control" readonly value="{{ $item->pendidikan }}">
                                                    
                                                @endif
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            @foreach ($pekerjaan as $item)
                                                @if ($akhwat->pekerjaan_id == $item->id)
                                                    
                                                    <input type="text" class="form-control" readonly value="{{ $item->pekerjaan }}">
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Warna Kulit</label>
                                            @foreach ($kulit as $item)
                                                @if ($akhwat->kulit_id == $item->id)
                                                    
                                                    <input type="text" class="form-control" readonly value="{{ $item->kulit }}">
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Golongan Darah</label>
                                            @foreach ($darah as $item)
                                                @if ($akhwat->darah_id == $item->id)
                                                    
                                                    <input type="text" class="form-control" readonly value="{{ $item->darah }}">
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Bentuk Wajah</label>
                                            @foreach ($wajah as $item)
                                                @if ($akhwat->wajah_id == $item->id)
                                                    
                                                    <input type="text" class="form-control" readonly value="{{ $item->wajah }}">
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Usia Nikah ideal</label>
                                            @foreach ($nikah as $item)
                                                @if ($akhwat->nikah_id == $item->id)
                                                    @if ($item->usia == 'ideal')
                                                    <input type="text" class="form-control" readonly value="Ideal : 19 - 25 Tahun">
                                                    @endif
                                                    @if ($item->usia == 'cukup')
                                                    <input type="text" class="form-control" readonly value="Cukup : 25 - 30 Tahun">
                                                    
                                                    @endif
                                                    @if ($item->usia == 'waspada')
                                                    <input type="text" class="form-control" readonly value="Waspada : 31 - Tak terhingga tahun">
                                                    
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
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

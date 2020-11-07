@extends('layouts.main')

@section('title')
    Daftar Calon Pasangan
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Daftar Calon Pasangan</h2>
    <p class="dashboard-subtitle">Cari dan temukan calon pasangan yang sesuai dengan <br> kriteria yang anda harapkan.</p>
  </div>
  <div class="dashboard-content">
    <button type="button" class="btn btn-success mt-2 mb-3" data-toggle="modal" data-target="#pilihKriteriaModel">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
    </svg> Cari Calon</button>
    
    <div class="row mt-2">
      <div class="col-12 col-md-12">
        <p class="text-muted ml-1">Daftar calon pasangan sesuai dengan kriteria yang anda harapkan</p>
        @foreach ($akhwat as $item)
          <div class="card card-list">
            <div class="card-body">
              <div class="row">
                
                <div class="col-4">
                  Zahra Fitriani Firdaus
                </div>
                <div class="col-3">
                  22 Tahun
                </div>
                <div class="col-2">
                  80 %
                </div>
                <div class="col-3">
                  <a href="{{ route('details-calon' , $item->nama) }}" class="btn btn-secondary">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        
        <div class="card card-list d-none">
          <div class="card-body">
              <h6 class="text-muted text-center">Belum ada daftar calon pasangan</h6>
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
<div class="modal fade" id="pilihKriteriaModel" tabindex="-1" aria-labelledby="pilihKriteriaModelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pilihKriteriaModelLabel">Pilih Kriteria Calon Pasangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="row">
            @php
                $no = 1;
            @endphp
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Keterampilan</h6>
                  @foreach ($keterampilan as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="checkbox" value="" id="{{ $item->keterampilan }}">
                    <label class="form-check-label" for="{{ $item->keterampilan }}">
                      {{ $item->keterampilan }}
                    </label>
                  </div>
                  @endforeach                  
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Asal Suku</h6>
                  @foreach ($suku as $item)
                    <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="radio" name="suku" value="{{ $item->suku }}" id="{{ $item->suku }}">
                      <label class="form-check-label" for="{{ $item->suku }}">
                        {{ $item->suku }}
                      </label>
                    </div>  
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Tinggi badan (berdasarkan range)</h6>
                  @foreach ($tinggi as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="tinggi" id="{{ $item->tinggi }}" value="{{ $item->tinggi }}" >
                    @if ($item->tinggi == "pendek")
                      <label class="form-check-label" for="{{ $item->tinggi }}">
                        Pendek : 140 - 153 cm
                      </label>
                    @endif
                    @if ($item->tinggi == "sedang")
                      <label class="form-check-label" for="{{ $item->tinggi }}">
                        Sedang : 154 - 166 cm
                      </label>
                    @endif
                    @if ($item->tinggi == "tinggi")
                      <label class="form-check-label" for="{{ $item->tinggi }}">
                        Tinggi : 167 - 180 cm
                      </label>
                    @endif
                  </div>
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Berat badan (berdasarkan range)</h6>
                  @foreach ($tubuh as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="tubuh" id="{{ $item->tubuh }}" value="{{ $item->tubuh }}" >
                    @if ($item->tubuh == "kurus")
                    <label class="form-check-label" for="{{ $item->tubuh }}">
                      Kurus : 45 - 54 kg
                    </label>
                    @endif
                    @if ($item->tubuh == "normal")
                      <label class="form-check-label" for="{{ $item->tubuh }}">
                        Normal : 55 - 64 kg
                      </label>
                    @endif
                    @if ($item->tubuh == "gemuk")
                      <label class="form-check-label" for="{{ $item->tubuh }}">
                        Gemuk : 65 - 75 kg
                      </label>
                    @endif
                    </div>
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Organisasi</h6>
                  @foreach ($organisasi as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="organisasi" id="{{ $item->organisasi }}" value="{{ $item->organisasi }}" >
                      <label class="form-check-label" for="{{ $item->organisasi }}">
                        {{ $item->organisasi }}
                      </label>
                  </div>
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Pendidikan</h6>
                  @foreach ($pendidikan as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="pendidikan" id="{{ $item->pendidikan }}" value="{{ $item->pendidikan }}" >
                      <label class="form-check-label" for="{{ $item->pendidikan }}">
                        {{ $item->pendidikan }}
                      </label>
                  </div>
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Jenis Rambut</h6>
                  @foreach ($rambut as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="rambut" id="{{ $item->rambut }}" value="{{ $item->rambut }}" >
                      <label class="form-check-label" for="{{ $item->rambut }}">
                        {{ $item->rambut }}
                      </label>
                  </div>
                  @endforeach
              </div>

              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Warna Kulit</h6>
                  @foreach ($kulit as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="kulit" id="{{ $item->kulit }}" value="{{ $item->kulit }}" >
                      <label class="form-check-label" for="{{ $item->kulit }}">
                        {{ $item->kulit }}
                      </label>
                  </div>
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Pekerjaan</h6>
                  @foreach ($pekerjaan as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="pekerjaan" id="{{ $item->pekerjaan }}" value="{{ $item->pekerjaan }}" >
                      <label class="form-check-label" for="{{ $item->pekerjaan }}">
                        {{ $item->pekerjaan }}
                      </label>
                  </div>
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Golongan Darah</h6>
                  @foreach ($darah as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="darah" id="{{ $item->darah }}" value="{{ $item->darah }}" >
                      <label class="form-check-label" for="{{ $item->darah }}">
                        {{ $item->darah }}
                      </label>
                  </div>
                  @endforeach
              </div>

              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Bentuk Wajah</h6>
                  @foreach ($wajah as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="wajah" id="{{ $item->wajah }}" value="{{ $item->wajah }}" >
                      <label class="form-check-label" for="{{ $item->wajah }}">
                        {{ $item->wajah }}
                      </label>
                  </div>
                  @endforeach
              </div>
              
              <div class="col-10 mb-3">
                  <h6>{{ $no++ }}. Usia Nikah Ideal</h6>
                  @foreach ($nikah as $item)
                  <div class="form-check mb-2 ml-3">
                    <input class="form-check-input" type="radio" name="usia" id="{{ $item->usia }}" value="{{ $item->usia }}" >
                    @if ($item->usia == "ideal")
                      <label class="form-check-label" for="{{ $item->usia }}">
                        Ideal : 19 - 25 Tahun
                      </label>
                    @endif
                    @if ($item->usia == "cukup")
                      <label class="form-check-label" for="{{ $item->usia }}">
                        Cukup : 26 - 30 Tahun
                      </label>
                    @endif
                    @if ($item->usia == "waspada")
                      <label class="form-check-label" for="{{ $item->usia }}">
                        Waspada : 31 - Tak terhingga tahun
                      </label>
                    @endif
                  </div>
                  @endforeach
              </div>
              
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success px-5">Cari Pasangan</button>
      </div>
    </div>
  </div>
</div>
@endpush
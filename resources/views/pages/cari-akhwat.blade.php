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
      <div class="col-12 col-md-10">
        <p class="text-muted ml-1">Daftar calon pasangan sesuai dengan kriteria yang anda harapkan</p>
        <div class="card card-list">
          <div class="card-body">
            <div class="row">
              
              <div class="col-6">
                Zahra Fitriani Firdaus
              </div>
              <div class="col-3">
                22 Tahun
              </div>
              <div class="col-3">
                <a href="#" class="btn btn-secondary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12 col-md-10">
        <div class="card card-list">
          <div class="card-body">
            <div class="row">
              
              <div class="col-6">
                Siti Mutmainnah
              </div>
              <div class="col-3">
                23 Tahun
              </div>
              <div class="col-3">
                <a href="#" class="btn btn-secondary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12 col-md-10">
        <div class="card card-list">
          <div class="card-body">
            <div class="row">
              
              <div class="col-6">
                Wahyuni 
              </div>
              <div class="col-3">
                21 Tahun
              </div>
              <div class="col-3">
                <a href="#" class="btn btn-secondary">Lihat Detail</a>
              </div>
            </div>
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
              <div class="col-10 mb-3">
                  <h6>1. Keterampilan</h6>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="memasak">
                      <label class="form-check-label" for="memasak">
                        Memasak
                      </label>
                  </div>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="mencuci">
                      <label class="form-check-label" for="mencuci">
                        Mencuci
                      </label>
                  </div>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="menjahit">
                      <label class="form-check-label" for="menjahit">
                        Menjahit
                      </label>
                  </div>
                  
              </div>
              
              <div class="col-10 mb-3">
                  <h6>2. Asal Suku</h6>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="bugis">
                      <label class="form-check-label" for="bugis">
                        Bugis
                      </label>
                  </div>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="jawa">
                      <label class="form-check-label" for="jawa">
                        Jawa
                      </label>
                  </div>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="sasakLombok">
                      <label class="form-check-label" for="sasakLombok">
                        Sasak Lombok
                      </label>
                  </div>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="mamuju">
                      <label class="form-check-label" for="mamuju">
                        Mamuju
                      </label>
                  </div>
              </div>
              <div class="col-10 mb-3">
                  <h6>3. Tinggi badan (berdasarkan range)</h6>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="pendek">
                      <label class="form-check-label" for="pendek">
                        Pendek (140cm - 145cm)
                      </label>
                  </div>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="sedang">
                      <label class="form-check-label" for="sedang">
                        Sedang (154cm -166cm)
                      </label>
                  </div>
                  <div class="form-check mb-2 ml-3">
                      <input class="form-check-input" type="checkbox" value="" id="tinggi">
                      <label class="form-check-label" for="tinggi">
                        Tinggi (167cm - 180cm)
                      </label>
                  </div>
                  
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
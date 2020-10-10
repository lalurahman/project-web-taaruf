@extends('layouts.admin')

@section('title')
    Detail Ikhwan
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Detail Ikhwan</h2>
    <p class="dashboard-subtitle">ini detailnya ikhwan</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
        <button
          type="submit"
          class="btn btn-secondary px-5 mb-3"
        >
          Kembali
        </button>
        <form action="">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      id="name"
                      value="Lalu Abdurrahman"
                      readonly
                    />
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      value="lalurahmanms@gmail.com"
                      readonly
                    />
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="biodata">Biodata Ikhwa</label>
                    <div class="row">
                        <div class="col-10">
                            <input
                            type="text"
                            class="form-control"
                            name="biodata"
                            id="biodata"
                            value="biodata.pdf"
                            readonly
                            />
                        </div>
                        <div class="col-2 mr-auto">
                            <a href="#" class="btn btn-secondary">Lihat</a>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="rekomendasi_murobbi">Surat Rekomendasi Murobbi</label>
                    <div class="row">
                        <div class="col-10">
                            <input
                            type="text"
                            class="form-control"
                            name="rekomendasi_murobbi"
                            id="rekomendasi_murobbi"
                            value="rekomendasi_murobbi.pdf"
                            readonly
                            />
                        </div>
                        <div class="col-2 mr-auto">
                            <a href="#" class="btn btn-secondary">Lihat</a>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="keterangan_nikah">Surat Keterangan Nikah</label>
                    <div class="row">
                        <div class="col-10">
                            <input
                            type="text"
                            class="form-control"
                            name="keterangan_nikah"
                            id="keterangan_nikah"
                            value="keterangan_nikah.pdf"
                            readonly
                            />
                        </div>
                        <div class="col-2 mr-auto">
                            <a href="#" class="btn btn-secondary">Lihat</a>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="keterangan_sehat">Surat Berbadan Sehat</label>
                    <div class="row">
                        <div class="col-10">
                            <input
                            type="text"
                            class="form-control"
                            name="keterangan_sehat"
                            id="keterangan_sehat"
                            value="keterangan_sehat.pdf"
                            readonly
                            />
                        </div>
                        <div class="col-2 mr-auto">
                            <a href="#" class="btn btn-secondary">Lihat</a>
                        </div>
                    </div>
                  </div>
                </div>

                                  
                
              </div>
              <div class="row">
                <div class="col text-right">
                  
                  <button
                    type="submit"
                    class="btn btn-success px-5"
                  >
                    Verifikasi
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
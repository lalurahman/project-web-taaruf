@extends('layouts.main')

@section('title')
    Profile
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Profile</h2>
    <p class="dashboard-subtitle">Isi data diri anda secara lengkap !</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
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
                    />
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="biodata">Biodata Ikhwa</label>
                    <div class="row">
                        <div class="col-10">
                            <input
                            type="file"
                            class="form-control"
                            name="biodata"
                            id="biodata"
                            />
                            <small class="text-muted">biodata.pdf</small>
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
                            type="file"
                            class="form-control"
                            name="rekomendasi_murobbi"
                            id="rekomendasi_murobbi"
                            />
                            <small class="text-muted">rekomendasi-murobbi.pdf</small>
                        </div>
                        <div class="col-2 mr-auto">
                            <a href="#" class="btn btn-secondary">Lihat</a>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="keterangan_nikah">Surat Izin Nikah</label>
                      <div class="row">
                          <div class="col-10">
                              <input
                              type="file"
                              class="form-control"
                              name="izin_nikah"
                              id="izin_nikah"
                              />
                              <small class="text-muted">izin-nikah.pdf</small>
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
                              type="file"
                              class="form-control"
                              name="keterangan_sehat"
                              id="keterangan_sehat"
                              />
                              <small class="text-muted">keterangan-sehat.pdf</small>
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
                    Perbarui Profil
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
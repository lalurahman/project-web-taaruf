@extends('layouts.admin')

@section('title')
    Daftar Akhwat
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Daftar Akhwat</h2>
    <p class="dashboard-subtitle">Tambahkan data akhwat!</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
        <a href="{{ route('daftar-akhwat') }}"
          class="btn btn-secondary px-5 mb-3"
        >
          Kembali
        </a>
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
                      value="Azizah Nur Safitri"
                    />
                  </div>
                </div>                               
                                             
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="number" name="" value="08546747" class="form-control">
                  </div>
                </div>                               
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" value="Jl. Bahagia Selalu" class="form-control">
                  </div>
                </div>                               
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="biodata">Biodata</label>
                    <div class="row">
                      <div class="col-10">
                        <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="biodata" aria-describedby="inputGroupFileAddon01" value="biodata.pdf">
                              <label class="custom-file-label" for="biodata">Masukkan biodata (pdf)</label>
                            </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <a href="#" class="btn btn-secondary">Lihat</a>
                      </div>
                    </div>
                    <small class="text-muted">biodata.pdf</small>
                  </div>
                </div>  

                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="keterampilan" class="d-block">Keterampilan</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="memasak" checked>
                        <label class="form-check-label" for="memasak">
                          Memasak
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="menjahit">
                        <label class="form-check-label" for="menjahit">
                          Menjahit
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="hias">
                        <label class="form-check-label" for="hias">
                          Hias
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="dekorasi">
                        <label class="form-check-label" for="dekorasi">
                          Dekorasi
                        </label>
                      </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Asal Suku</label>
                      <select class="custom-select">
                        <option selected>Pilih Asal Suku</option>
                        <option value="1">Bugis</option>
                        <option value="2" selected>Jawa</option>
                        <option value="3">Makassar</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Tinggi Badan </label>
                      <select class="custom-select">
                        <option selected>Pilih Tinggi Badan</option>
                        <option value="1">Pendek (140-153 cm)</option>
                        <option value="2" selected>Sedang (154-166 cm)</option>
                        <option value="3">Tinggi (167-180 cm)</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Berat Badan (Berdasarkan range)</label>
                      <select class="custom-select">
                        <option selected>Pilih Berat Badan</option>
                        <option value="1">Kurus	: 45-54 kg</option>
                        <option value="2" selected>Normal	: 55-64 kg</option>
                        <option value="3">Gemuk	: 65-75 kg</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Organisasi</label>
                      <select class="custom-select">
                        <option selected>Pilih Jabatan Organisasi</option>
                        <option value="1">Tidak Suka Organisasi</option>
                        <option value="2">Ketua Lembaga Dakwah Kampus</option>
                        <option value="3" selected>Anggota Lembaga Dakwah Kampus</option>
                        <option value="3">Pasif</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Jenis Rambut</label>
                      <select class="custom-select">
                        <option selected>Pilih Jenis Rambut</option>
                        <option value="1">Lurus</option>
                        <option value="2" selected>Tebal</option>
                        <option value="3">Keriting Ringan</option>
                        <option value="3">Kribo</option>
                        <option value="3">Panjang</option>
                        <option value="3">Pendek</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Pendidikan</label>
                      <select class="custom-select">
                        <option selected>Pilih Pendidikan</option>
                        <option value="1">SD</option>
                        <option value="2">SMP/MTS</option>
                        <option value="3">SMA/SMK/MA</option>
                        <option value="3" selected>S1</option>
                        <option value="3">S2</option>
                        <option value="3">S3</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Pekerjaan</label>
                      <select class="custom-select">
                        <option selected>Pilih Pekerjaan</option>
                        <option value="1" selected>Perawat</option>
                        <option value="2">Guru</option>
                        <option value="3">PNS</option>
                        <option value="3">Polwan</option>
                        <option value="3">Pramugari</option>
                        <option value="3">Penulis</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Warna Kulit</label>
                      <select class="custom-select">
                        <option selected>Pilih Warna Kulit</option>
                        <option value="1">Putih Bersih</option>
                        <option value="2" selected>Kuning Langsat</option>
                        <option value="3">Sawo Matang atau Coklat</option>
                        <option value="3">Hitam</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Golongan Darah</label>
                      <select class="custom-select">
                        <option selected>Pilih Golongan Darah</option>
                        <option value="1">A</option>
                        <option value="2" selected>B</option>
                        <option value="3">AB</option>
                        <option value="3">O</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Bentuk Wajah</label>
                      <select class="custom-select">
                        <option selected>Pilih Bentuk Wajah</option>
                        <option value="1">Bentuk Wajah Hati</option>
                        <option value="2">Bentuk Wajah Persegi</option>
                        <option value="3">Bentuk Wajah Bulat</option>
                        <option value="3">Bentuk Wajah Berlian</option>
                        <option value="3" selected>Bentuk Wajah Oval</option>
                        <option value="3">Bentuk Wajah Persegi Panjang</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label >Usia Nikah ideal</label>
                      <select class="custom-select">
                        <option selected>Pilih Usia Nikah ideal</option>
                        <option value="1" selected>Ideal	: 19-25 tahun</option>
                        <option value="2">Cukup	: 26-30 tahun</option>
                        <option value="3">Waspadah	: 31- tak terhingga tahun</option>
                      </select>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label>Riwayat Penyakit</label>
                      <input type="text" class="form-control" value="tidak ada">
                    </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col text-right">
                  
                  <button
                    type="submit"
                    class="btn btn-success px-5"
                  >
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

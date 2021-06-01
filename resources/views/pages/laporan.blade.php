<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Laporan</title>
    {{-- style --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>

  <body>
    <section class="kop">
        <div class="text-center">
            <h5>LAPORAN REKOMENDASI PENCARIAN JODOH</h5>
            <small class="text-small">{{ date("d / m / Y") }}</small>
            <hr style="border: 1px solid #000">
        </div>
    </section>
    <section class="data mt-2">
        {{-- <div class="col-6">
            <h5>Hasil Pencarian Jodoh :</h5>
            <small>Nama :</small> {{ $laporan->nama }} <br>
            <small>Nomor HP :</small> {{ $laporan->no_hp }} <br>
            <small>Alamat :</small> {{ $laporan->alamat }} <br>
        </div> --}}
        <div class="">
            <div class="row mb-2">
                <div class="col-6">
                    <h5>Hasil Pencarian Jodoh : {{ auth()->user()->name }}, direkomendasikan</h5>
                    <small>Nama :</small> {{ $laporan->nama }} <br>
                    {{-- <small>Nomor HP :</small> {{ $laporan->no_hp }} <br>
                    <small>Alamat :</small> {{ $laporan->alamat }} <br> --}}
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Keterampilan :</p>
                    <ol type="1" style="margin-top: -10px; margin-left: -15px">
                        @foreach ($laporan->skills as $item)
                        <li>{{ $item->keterampilan }}</li>
                        @endforeach
                    </ol>
                </div>
                <div class="col-6 float-right">
                    <p>Asal Suku :</p>
                    @foreach ($laporan->tribe as $item)
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $item->suku }}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Tinggi Badan :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->height->tinggi }}</li>

                    </ul>
                </div>
                <div class="col-6 float-right">
                    <p>Berat Badan (berdasarkan range):</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->body->tubuh }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Organisasi :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->comunity->organisasi }}</li>

                    </ul>
                </div>
                <div class="col-6 float-right">
                    <p>Jenis Rambut :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->hair->rambut }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Pendidikan :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->education->pendidikan }}</li>
                    </ul>
                </div>
                <div class="col-6 float-right">
                    <p>Pekerjaan :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->job->pekerjaan }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Warna Kulit :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->skin->kulit }}</li>

                    </ul>
                </div>
                <div class="col-6 float-right">
                    <p>Golongan Darah :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>{{ $laporan->blood->darah }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Bentuk Wajah :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>Oval</li>

                    </ul>
                </div>
                <div class="col-6 float-right">
                    <p>Usia Nikah Ideal :</p>
                    <ul style="margin-top: -10px; margin-left: -15px">
                        <li>19 tahun</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="hasil">
        <hr style="border: 1px solid #000">
            <h5 class="text-center">HASIL PRESENTASI KECOCOKAN</h5>
            <h5 class="text-center">{{ number_format(session($laporan->nama),2) * 100 }}%</h5>
        <hr style="border: 1px solid #000">
    </section>
    <section class="ttd mt-2 float-right">
        <small class="d-block">Yang bertanda tangan dibawah ini :</small>
        <small class="d-block">Ustadz, {{ date("d / m / Y") }}</small>
        <small class="d-block mt-5">(Ustadz)</small>
    </section>
  </body>

</html>

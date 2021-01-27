@extends('layouts.auth')

@section('title')
    Daftar Akun Baru
@endsection

@section('content')

<div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
          <div class="col-lg-4">
            <h2 class="text-white">
              Masukkan data diri anda secara lengkap !
            </h2>
            @if($errors->any())
              <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <span class="text-danger">{{ $errors->first() }}</span>
              </div>
            @endif
            <form action="{{ route('register-process') }}" method="post" class="mt-3" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="form-control @error('name') is-invalid @enderror"
                  v-model="name"
                  value="{{ old('name') }}" 
                  required 
                  autocomplete="name"
                  autofocus
                />
                
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  @change="checkForEmailAvailability()"
                  class="form-control @error('email') is-invalid @enderror"
                  :class="{ 'is-invalid' : this.email_unavailable }"
                  v-model="email"
                  value="{{ old('email') }}" required autocomplete="email"
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control @error('password') is-invalid @enderror"
                  required 
                />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input
                  type="password"
                  name="password_confirmation"
                  id="password_confirmation"
                  class="form-control @error('password_confirmation') is-invalid @enderror"
                  required 
                />
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="biodata">Biodata Ikhwa</label>
                <input
                  type="file"
                  name="biodata"
                  id="biodata"
                  class="form-control @error('biodata') is-invalid @enderror"
                  required 
                />
                <small class="text-white">dokumen biodata lengkap anda (pdf)
                </small>
                @error('biodata')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="rekomendasi_murobbi">Surat Rekomendasi Murobbi</label>
                <input
                  type="file"
                  name="rekomendasi_murobbi"
                  id="rekomendasi_murobbi"
                  class="form-control @error('rekomendasi_murobbi') is-invalid @enderror"
                  required 
                />
                <small class="text-white">surat keterangan dari murobbi, bahwa aktif
                    tarbiyah minimal 3 bulan (pdf)</small>

                @error('rekomendasi_murobbi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="izin_nikah">Surat Izin Nikah</label>
                <input
                  type="file"
                  name="izin_nikah"
                  id="izin_nikah"
                  class="form-control @error('izin_nikah') is-invalid @enderror"
                  required 
                />
                <small class="text-white">surat keterangan persetujuan nikah dari wali (pdf)
                </small>
                @error('izin_nikah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="keterangan_sehat">Surat Berbadan Sehat</label>
                <input
                  type="file"
                  name="keterangan_sehat"
                  id="keterangan_sehat"
                  class="form-control @error('keterangan_sehat') is-invalid @enderror"
                  required 
                />
                <small class="text-white">surat keterangan sehat dari dokter (pdf)
                </small>
                @error('keterangan_sehat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <button type="submit" class="btn btn-success btn-block mt-4" :disabled="this.email_unavailable">
                Daftar Akun
              </button>
              <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2">
                Sudah punya akun
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      Vue.use(Toasted);

      var register = new Vue({
        el: "#register",
        mounted(){
          AOS.init();
        },
        methods: {
          checkForEmailAvailability: function(){
            var self = this;
            axios.get('{{ route('api-register-check') }}', {
              params: {
                email: this.email
              }
            })
            .then(function (response) {
              if(response.data == 'Available') {
                  
                  self.email_unavailable = false;
                } else {
                  self.$toasted.error(
                    "Email sudah terdaftar",
                    {
                      position: "top-center",
                      className: "rounded",
                      duration: 1000,
                    }
                  );
                  self.email_unavailable = true;
                }
            });
          }
        },
        data(){
          return {
            name: "",
            email: "",
            email_unavailable: false
          }
        }
      });
    </script>
@endpush
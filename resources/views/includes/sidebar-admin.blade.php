<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img
        src="/images/logo-wahdah.png"
        alt="logo"
        class="my-4"
        width="100"
      />
      <h6>LP2KS</h6>
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin')) ? 'active' : '' }}"
        >Dashboard</a
      >
      {{-- <a
        href="{{ route('cari-akhwat') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/cari-akhwat')) ? 'active' : '' }}"
        >Cari Calon</a
      > --}}
      <a
        href="{{ route('daftar-akhwat') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/akhwat*')) ? 'active' : '' }}"
        >Data Akhwat</a
      >
      <a
        href="{{ route('daftar-ikhwan') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/ikhwan*')) ? 'active' : '' }}"
        >Data Ikhwan</a
      >
      {{-- <a
        href="{{ route('daftar-pasangan') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/pasangan*')) ? 'active' : '' }}"
        >Data Pasangan</a
      > --}}
      <a
        href="{{ route('daftar-kriteria') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/kriteria*')) ? 'active' : '' }}"
        >Data Kriteria</a
      >
    </div>
</div>

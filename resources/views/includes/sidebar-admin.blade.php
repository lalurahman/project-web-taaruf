<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img
        src="/images/logo-wahdah.png"
        alt="logo"
        class="my-4"
        width="100"
      />
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin')) ? 'active' : '' }}"
        >Dashboard</a
      >
      <a
        href="{{ route('daftar-akhwat') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/akhwat*')) ? 'active' : '' }}"
        >Data Akhwat</a
      >
    </div>
</div>
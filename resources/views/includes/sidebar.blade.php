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
        href="{{ route('profile') }}"
        class="list-group-item list-group-item-action {{ (request()->is('user*')) ? 'active' : '' }}"
        >Profile</a
      >
    </div>
</div>
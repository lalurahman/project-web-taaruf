@extends('layouts.admin')

@section('title')
    Daftar Ikhwan
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Daftar Ikhwan</h2>
    <p class="dashboard-subtitle">Tambahkan data Ikhwan!</p>
  </div>
  <div class="dashboard-content">
    <div class="row mt-3">
      <div class="col-12 mt-2">
        <ul
          class="nav nav-pills mb-3"
          id="pills-tab"
          role="tablist"
        >
          <li class="nav-item" role="presentation">
            <a
              class="nav-link active text-capitalize"
              id="pills-ikhwan-active-tab"
              data-toggle="pill"
              href="#pills-ikhwan-active"
              role="tab"
              aria-controls="pills-ikhwan-active"
              aria-selected="true"
              >Belum menemukan pasangan</a
            >
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link text-capitalize"
              id="pills-ikhwan-tab"
              data-toggle="pill"
              href="#pills-ikhwan"
              role="tab"
              aria-controls="pills-ikhwan"
              aria-selected="false"
              >Sudah menemukan pasangan</a
            >
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="pills-ikhwan-active"
            role="tabpanel"
            aria-labelledby="pills-ikhwan-active-tab"
          >
            <table class="table table-hover scroll-horizontal-vertical w-100">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($ikhwan as $item)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                      <div class="btn-group">
                        <a href="{{ route('details-ikhwan', $item->id) }}" class="btn btn-primary text-white">Lihat Detail</a>
                          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                        
                        <div class="dropdown-menu">
                            <form action="{{ route('updated-ikhwan') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <input type="hidden" name="id" value="{{ $item->id }}">
                              <button type="submit" class="dropdown-item">Sudah Dapat Pasangan</button>
                            </form>
                            <form action="{{ route('delete-ikhwan', $item->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item text-danger">Hapus</button>
                            </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                
                
                </tbody>
            </table>
          </div>
          <div
            class="tab-pane fade"
            id="pills-ikhwan"
            role="tabpanel"
            aria-labelledby="pills-ikhwan-tab"
          >
          <table class="table table-hover scroll-horizontal-vertical w-100">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach ($ikhwan_active as $item)
              <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Aksi</button>
                          <div class="dropdown-menu">
                            
                            <a href="{{ route('details-ikhwan', $item->id) }}" class="dropdown-item">Lihat Detail</a>
                            <form action="{{ route('delete-ikhwan', $item->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item text-danger">Hapus</button>
                            </form>
                          </div>
                      </div>
                  </td>
              </tr>
              @endforeach
            
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
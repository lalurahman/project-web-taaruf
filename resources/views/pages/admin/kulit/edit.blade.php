@extends('layouts.admin')

@section('title')
    Edit Warna Kulit
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Warna Kulit</h2>
    <p class="dashboard-subtitle">Edit Data Warna Kulit</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kulit.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="kulit">Edit Warna Kulit</label>
                          <input type="text" name="kulit" id="kulit" class="form-control" value="{{ $item->kulit }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
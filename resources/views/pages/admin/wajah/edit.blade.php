@extends('layouts.admin')

@section('title')
    Edit Bentuh Wajah
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Bentuh Wajah</h2>
    <p class="dashboard-subtitle">Edit Data Bentuh Wajah</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('wajah.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="wajah">Edit Bentuh Wajah</label>
                          <input type="text" name="wajah" id="wajah" class="form-control" value="{{ $item->wajah }}" required>
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
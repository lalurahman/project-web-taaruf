@extends('layouts.admin')

@section('title')
    Edit Tinggi Badan
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Tinggi Badan</h2>
    <p class="dashboard-subtitle">Edit Data Tinggi Badan</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tinggi.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="tinggi">Edit Tinggi Badan</label>
                          <input type="text" name="tinggi" id="tinggi" class="form-control" value="{{ $item->tinggi }}" required>
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
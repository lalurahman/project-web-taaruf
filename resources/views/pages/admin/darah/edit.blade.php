@extends('layouts.admin')

@section('title')
    Edit Golongan Darah
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Golongan Darah</h2>
    <p class="dashboard-subtitle">Edit Data Golongan Darah</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('darah.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="darah">Edit Golongan Darah</label>
                          <input type="text" name="darah" id="darah" class="form-control" value="{{ $item->darah }}" required>
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
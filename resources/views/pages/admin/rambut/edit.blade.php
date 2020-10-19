@extends('layouts.admin')

@section('title')
    Edit Warna Rambut
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Warna Rambut</h2>
    <p class="dashboard-subtitle">Edit Data Warna Rambut</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('rambut.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="rambut">Edit Warna Rambut</label>
                          <input type="text" name="rambut" id="rambut" class="form-control" value="{{ $item->rambut }}" required>
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
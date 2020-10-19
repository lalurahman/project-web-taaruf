@extends('layouts.admin')

@section('title')
    Edit Keterampilan
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Keterampilan</h2>
    <p class="dashboard-subtitle">Edit Data Keterampilan</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('keterampilan.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="keterampilan">Edit Keterampilan</label>
                          <input type="text" name="keterampilan" id="keterampilan" class="form-control" value="{{ $item->keterampilan }}" required>
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
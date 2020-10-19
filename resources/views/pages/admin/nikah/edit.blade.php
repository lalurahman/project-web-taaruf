@extends('layouts.admin')

@section('title')
    Edit Usia Nikah Ideal
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Usia Nikah Ideal</h2>
    <p class="dashboard-subtitle">Edit Data Usia Nikah Ideal</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('nikah.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="usia">Edit Usia Nikah Ideal</label>
                          <input type="text" name="usia" id="usia" class="form-control" value="{{ $item->usia }}" required>
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
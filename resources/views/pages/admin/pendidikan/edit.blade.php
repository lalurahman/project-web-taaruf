@extends('layouts.admin')

@section('title')
    Edit Pendidikan
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Pendidikan</h2>
    <p class="dashboard-subtitle">Edit Data Pendidikan</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pendidikan.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="pendidikan">Edit Pendidikan</label>
                          <input type="text" name="pendidikan" id="pendidikan" class="form-control" value="{{ $item->pendidikan }}" required>
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
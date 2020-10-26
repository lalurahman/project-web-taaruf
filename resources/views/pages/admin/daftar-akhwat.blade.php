@extends('layouts.admin')

@section('title')
    Daftar Akhwat
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Daftar Akhwat</h2>
            <p class="dashboard-subtitle">Tambahkan data akhwat!</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('tambah-akhwat') }}" class="btn btn-success mb-3">Tambah Data Akhwat</a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($akhwats as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $akhwats->firstItem() + $key }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>
                                            <a href="{{ route('details-akhwat', $item->nama) }}" class="btn btn-primary btn-sm">Lihat
                                                Detail</a>
                                            <button class="btn btn-danger btn-sm" onclick="hapus({{ $item->id }})">Hapus</button>
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

@section('script')
<script>
    function hapus(id) {
        var r = confirm('do you really want to delete this data ?')

        if (r == true) {
            $.ajax({
                method: "DELETE",
                url: "{{ route('deleteAkhwat') }}",
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                data: {
                    id_data: id,
                },
                dataType: "JSON",
                success: function (response) {
                    alert(response.message)
                    location.reload()
                },
                error: function (response) {
                    alert(response.message)
                }
            });
        }
    }
</script>
@endsection

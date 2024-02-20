@extends('template.layout')

@section('judul')
    Data Kamar
@endsection

@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            Daftar Kamar
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>Nama Hotel</th>
                            <th>Nama Jenis Kamar</th>
                            <th>No Kamar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->jeniskamar->hotel->nama_hotel }}</td>
                            <td>{{ $item->jeniskamar->n_jenis_kamar }}</td>
                            <td>{{ $item->no_kamar }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


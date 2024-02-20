@extends('template.layout')

@section('judul')
    Data Jenis Kamar
@endsection

@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            Daftar Jenis Kamar
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>Nama Hotel</th>
                            <th>Nama Jenis Kamar</th>
                            <th>Tipe Kasur</th>
                            <th>Jumlah Kasur</th>
                            <th>max orang</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->hotel->nama_hotel }}</td>
                            <td>{{ $item->n_jenis_kamar }}</td>
                            <td>{{ $item->tipe_kasur }}</td>
                            <td>{{ $item->jumlah_kasur }}</td>
                            <td>{{ $item->max_orang }}</td>
                            <td>{{ $item->harga }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


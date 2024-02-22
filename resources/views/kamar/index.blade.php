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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->jeniskamar->hotel->nama_hotel }}</td>
                            <td>{{ $item->jeniskamar->n_jenis_kamar }}</td>
                            <td>{{ $item->no_kamar }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                            <form class="d-inline" action="{{ route('updateStatusKamar', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-icon btn-sm icon-left btn-success">Checkout
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


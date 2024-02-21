@extends('template.layout')

@section('judul')
    {{ $hotel->nama_hotel }}
@endsection

@section('content')
    <img class="mb-5" src="{{ Storage::url($hotel->foto_hotel) }}" alt="{{ $hotel->nama_hotel }}"
        style="max-width: 250px; max-height: 250px;">

    <div class="d-flex flex-wrap">
        @foreach ($jeniskamar as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ url('booking-hotel') . '/' . $item->id }}">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $item->n_jenis_kamar }}</h4>
                        </div>
                        <div class="card-body">
                            <img src="{{ Storage::url($item->foto_kamar) }}" alt="{{ $item->n_jenis_kamar }}"
                                style="max-width: 200px; max-height: 150px;">
                            <p>{{ $item->max_orang }} Dewasa</p>
                            <p>{{ $item->tipe_kasur }}</p>
                            <p>{{ $item->jumlah_kasur }} Ranjang</p>
                            <h6>{{ $item->harga }}</h6>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection

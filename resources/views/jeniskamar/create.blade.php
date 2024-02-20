@extends('template.layout')

@section('judul')
    Jenis Kamar
@endsection

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="{{ route('jeniskamar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Hotel</label>
                        <select name="hotel_id" class="form-control select2">
                            <option></option>
                            @foreach ($hotel as $item)
                            <option  value="{{ $item->id }}">{{ $item->nama_hotel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="n_jenis_kamar">Nama Jenis Kamar</label>
                        <input type="text" class="form-control" id="n_jenis_kamar" name="n_jenis_kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_kasur">Tipe Kasur</label>
                        <input type="text" class="form-control" id="tipe_kasur" name="tipe_kasur" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kasur">Jumlah Kasur</label>
                        <input type="number" min="1" class="form-control" id="jumlah_kasur" name="jumlah_kasur" required>
                    </div>
                    <div class="form-group">
                        <label for="max_orang">Max Orang</label>
                        <input type="number" min="1" class="form-control" id="max_orang" name="max_orang" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harg</label>
                        <input type="number" min="1" class="form-control currency" id="harga" name="harga" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('template.layout')
@section('judul')
    Booking Kamar {{ $jeniskamar->n_jenis_kamar }} ({{ $jeniskamar->hotel->nama_hotel }})
@endsection
@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                Form Booking
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('reservasi-hotel.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Kamar </label>
                        <select name="kamar_id" class="form-control select2">
                            <option></option>
                            @foreach ($kamar as $item)
                                <option value="{{ $item->jeniskamar_id }}">{{ $item->no_kamar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_tamu">Nama Tamu</label>
                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_booking">Tanggal Booking</label>
                        <input type="text" class="form-control datepicker" id="tanggal_booking" name="tanggal_booking"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_checkin">Tanggal Checkin</label>
                        <input type="text" class="form-control datepicker" id="tanggal_checkin" name="tanggal_checkin"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_checkout">Tanggal Checkout</label>
                        <input type="text" class="form-control datepicker" id="tanggal_checkout" name="tanggal_checkout"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('template.layout')

@section('judul')
    Tambah Hotel
@endsection

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                Tambah Hotel
            </div>
            <div class="card-body">
                <form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_hotel">Nama Hotel</label>
                        <input type="text" class="form-control" id="nama_hotel" name="nama_hotel" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bintang</label>
                        <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">
                                <input type="radio" name="bintang" value="1" class="selectgroup-input"
                                    checked="">
                                <span class="selectgroup-button selectgroup-button-icon">1</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="bintang" value="2" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon">2</i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="bintang" value="3" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon">3</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="bintang" value="4" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon">4</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="bintang" value="5" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon">5</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Hotel</label>
                            <input type="file" class="form-control" id="foto_hotel" name="foto_hotel" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

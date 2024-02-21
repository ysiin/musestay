<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Reservasi_hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class ReservasiHotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Reservasi_hotel::with('kamar.jeniskamar')->get();
        return view('reservasi_hotel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kamar = Kamar::with('jeniskamar')->get();
        return view('reservasi_hotel.create', compact('kamar'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'kamar_id' => 'required',
            'nama_tamu' => 'required', // Pastikan jumlah tiket tidak boleh negatif atau nol
            'no_telp' => 'required',
            'tanggal_booking' => 'required',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
        ]);
    
        // Hitung harga total berdasarkan jumlah tiket
    
        // Buat instance baru dari model Reservasi
        $newData = new Reservasi_hotel();
        $newData->kamar_id = $request->input('kamar_id');
        $newData->nama_tamu = $request->input('nama_tamu');
        $newData->no_telp = $request->input('no_telp');
        $newData->tanggal_booking = $request->input('tanggal_booking');
        $newData->tanggal_checkin = $request->input('tanggal_checkin');
        $newData->tanggal_checkout = $request->input('tanggal_checkout');
        $newData->created_by = Auth::id(); // Menyematkan ID pengguna yang membuat entitas.
    
        // Simpan data ke database
        $newData->save();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('reservasi-hotel.index')->with('success', 'Reservasi berhasil dibuat!');
    }
    /**
     * Display the specified resource.
     */
    public function show(reservasi_hotel $reservasi_hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservasi_hotel $reservasi_hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservasi_hotel $reservasi_hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservasi_hotel $reservasi_hotel)
    {
        //
    }
}

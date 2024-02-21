<?php

namespace App\Http\Controllers;

use App\Models\Pembayaranhotel;
use App\Models\Reservasi_hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranhotelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pembayaranhotel::all();
        return view('pembayaranhotel.index', compact('data'));
    }

    public function menu()
    {
        $reservasi = Reservasi_hotel::where('status', 'Pending')
            ->where('created_by', Auth::id())->get();

        return view('pembayaranhotel.menu')->with('reservasi', $reservasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $reservasi = Reservasi_hotel::find($id);

        if (!$reservasi) {
            abort(404);  //Handle jika data tidak ditemukan
        }

        return view('pembayaranhotel.create', compact('reservasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi input jika diperlukan
        $request->validate([
            'bank_tf' => 'required|string',
            'nama_rek' => 'required|string',
            'tanggal_transfer' => 'required|string',
            'bukti_transfer' => 'required',
            'reservasi_hotel_id' => 'required',
        ]);

        $bukti_transfer = $request->file('bukti_transfer');
        $path = $bukti_transfer->store('bukti-transfer');

        $data = [
            'reservasi_hotel_id' => $request->reservasi_hotel_id,
            'nama_rek' => $request->nama_rek,
            'bukti_transfer' => $path,
            'tanggal_transfer' => $request->tanggal_transfer,
            'bank_tf' => $request->bank_tf,
        ];

        //simpan data ke db
        $save = Pembayaranhotel::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pembayaran-hotel.menu')->with('success', 'Reservasi berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

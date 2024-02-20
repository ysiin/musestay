<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Jeniskamar;
use Illuminate\Http\Request;

class JenisKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jeniskamar::all();
        return view('jeniskamar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotel = Hotel::all();
        return view('jeniskamar.create', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'hotel_id' => 'required',
            'n_jenis_kamar' => 'required',
            'tipe_kasur' => 'required',
            'jumlah_kasur' => 'required',
            'max_orang' => 'required',
            'harga' => 'required',
        ]);


        $harga = $request ->input('harga');
        $formattedHarga = 'RP ' . number_format($harga, 0, ',', '.');

        $data = [
            'hotel_id' => $request->hotel_id,
            'n_jenis_kamar' => $request->n_jenis_kamar,
            'tipe_kasur' => $request->tipe_kasur,
            'jumlah_kasur' => $request->jumlah_kasur,
            'max_orang' => $request->max_orang,
            'harga' => $formattedHarga,
        ];

        //simpan data ke db
        $save = Jeniskamar::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jeniskamar.index')->with('success', 'Reservasi berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

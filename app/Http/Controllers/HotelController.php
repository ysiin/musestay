<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Hotel::all();
        return view('hotel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama_hotel' => 'required|string',
            'alamat' => 'required', 
            'bintang' => 'required|integer',
            'foto_hotel' => 'required',
        ]);

        $foto_hotel = $request->file('foto_hotel');
        $path = $foto_hotel->store('public/foto_hotel');

        $data = [
            'nama_hotel' => $request->nama_hotel,
            'alamat' => $request->alamat,
            'bintang' => $request->bintang,
            'foto_hotel' => $path,
        ];

        //simpan data ke db
        $save = Hotel::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('hotel.index')->with('success', 'Reservasi berhasil dibuat!');
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

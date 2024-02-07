<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ApiReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Reservasi::all();

        return response()->json([
            'status' => true,
            'message' => 'data successfully',
            'data' => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required|string',
            'jumlah_tiket' => 'required|integer|min:1', // Pastikan jumlah tiket tidak boleh negatif atau nol
            'tanggal_datang' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|email',
          
        ]);

        // Hitung harga total berdasarkan jumlah tiket
        $hargaPerTiket = 10000; // Misalnya harga per tiket adalah Rp 10.000
        $jumlahTiket = $request->input('jumlah_tiket');
        $hargaTotal = $hargaPerTiket * $jumlahTiket;

        $formattedHargaTotal = 'RP ' . number_format($hargaTotal, 0, ',', '.');

        // Buat instance baru dari model Reservasi
        $newData = new Reservasi();
        $newData->nama = $request->input('nama');
        $newData->jumlah_tiket = $jumlahTiket; // Simpan jumlah tiket yang diinput oleh pengguna
        $newData->harga_total = $formattedHargaTotal;
        $newData->tanggal_datang = $request->input('tanggal_datang');
        $newData->no_telp = $request->input('no_telp');
        $newData->email = $request->input('email');
   

        // Simpan data ke database
        $newData->save();

        // Berikan respons JSON dengan data baru yang berhasil disimpan
        return response()->json([
            'status' => true,
            'message' => 'Reservasi berhasil dibuat',
            'data' => $newData
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $category = Reservasi::findOrFail($id);

            return response()->json([
                'status' => true,
                'message' => 'Data berhasil diperoleh',
                'data' => $category
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
                'error' => $e->getMessage()
            ], 404);
        }
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
        $validateData = $request->validate([
            'name_category' => 'required',
        ]);

        $record = Reservasi::findOrFail($id);

        $record->name_category = $request->input('name_category');

        $record->save();

        return response()->json([
            'status' => true,
            'message' => 'Data updated successfully',
            'data' => $record
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Reservasi::findOrFail($id);
        $category->delete();

        return response()->json([
            'status' => true,
            'message' => 'Data deleted successfully',
            'data' => $category
        ], 200);
    }
}

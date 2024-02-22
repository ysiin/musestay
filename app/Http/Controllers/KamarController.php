<?php

namespace App\Http\Controllers;

use App\Models\Jeniskamar;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kamar::all();
        return view('kamar.index', compact('data'));
    }

    public function updateStatus(Request $request, string $id)
    {
        $data = Kamar::where('id', $id);
        $data->update(['status' => 'Kosong']);

        // Tambahkan pesan berhasil jika perlu

        return redirect()->route('kamar.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jeniskamar = Jeniskamar::all();
        return view('kamar.create', compact('jeniskamar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'jeniskamar_id' => 'required',
            'no_kamar' => 'required',
        ]);



        $data = [
            'jeniskamar_id' => $request->jeniskamar_id,
            'no_kamar' => $request->no_kamar,
        ];

        //simpan data ke db
        $save = Kamar::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kamar.index')->with('success', 'Reservasi berhasil dibuat!');
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

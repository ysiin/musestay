<?php

namespace App\Http\Controllers;

use App\Models\Pembayarantiket;
use App\Models\Reservasi;
use App\Observers\UpdateStatusObserver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PembayarantiketController extends Controller
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
        $data = Pembayarantiket::all();
        return view('pembayarantiket.index', compact('data'));
    }

    public function history()
    {
        $data = Pembayarantiket::where('created_by', Auth::id())->get();
        return view('pembayarantiket.history')->with('data', $data);
    }

    public function menu()
    {
        $reservasi = Reservasi::where('status', 'Pending')
            ->where('created_by', Auth::id())->get();


        return view('pembayarantiket.menu')->with('reservasi', $reservasi);
    }

    public function updateStatus(Request $request, string $id)
    {
        $observer = new UpdateStatusObserver();
        $observer->updateStatus($id);

        // Tambahkan pesan berhasil jika perlu
        session()->flash('success', 'Status berhasil diperbarui dan notifikasi telah dikirimkan');

        return redirect()->route('pembayaran-tiket.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $reservasi = Reservasi::find($id);

        if (!$reservasi) {
            abort(404);  //Handle jika data tidak ditemukan
        }

        return view('pembayarantiket.create', compact('reservasi'));
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
            'reservasi_id' => 'required',
        ]);

        $bukti_transfer = $request->file('bukti_transfer');
        $path = $bukti_transfer->store('bukti-transfer');

        $data = [
            'reservasi_id' => $request->reservasi_id,
            'nama_rek' => $request->nama_rek,
            'bukti_transfer' => $path,
            'tanggal_transfer' => $request->tanggal_transfer,
            'bank_tf' => $request->bank_tf,
            'created_by' => Auth::id(),
        ];

        //simpan data ke db
        $save = Pembayarantiket::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pembayaran-tiket.menu')->with('success', 'Reservasi berhasil dibuat!');
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

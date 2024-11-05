<?php

namespace App\Http\Controllers;

use App\Models\OutsoleOut;
use Illuminate\Http\Request;

class OutsoleOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel outsole_out

        $outsolesout = OutsoleOut::all()->map(function ($outsoleout) {
            $outsoleout->total_size = $outsoleout->size_36 + $outsoleout->size_37 + $outsoleout->size_38 + $outsoleout->size_39 + $outsoleout->size_40 + $outsoleout->size_41 + $outsoleout->size_42;
            return $outsoleout;
        });

        // Mengirim data ke view (misalnya `outsoleouts.index`) untuk ditampilkan
        return view('outsolesout.index', compact('outsolesout'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk menambahkan data baru
        return view('outsolesout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'release' => 'required|date',
            'work_order' => 'required|string|max:255',
            'start_outsole' => 'required|date',
            'finish_outsole' => 'required|date',
            'po_spk' => 'required|string|max:255',
            'model_name' => 'required|string|max:255',
            'style' => 'required|string|max:255',
            'output' => 'required|integer',
            'size_36' => 'nullable|integer',
            'size_37' => 'nullable|integer',
            'size_38' => 'nullable|integer',
            'size_39' => 'nullable|integer',
            'size_40' => 'nullable|integer',
            'size_41' => 'nullable|integer',
            'size_42' => 'nullable|integer',
        ]);

        // Membuat data baru
        OutsoleOut::create($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('outsolesout.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OutsoleOut $outsoleout)
    {
        // Menampilkan detail data
        return view('outsolesout.show', compact('outsoleout'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OutsoleOut $outsoleout)
    {
        // Menampilkan form edit
        return view('outsolesout.edit', compact('outsoleout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OutsoleOut $outsoleout)
    {
        // Validasi input
        $validated = $request->validate([
            'release' => 'required|date',
            'work_order' => 'required|string|max:255',
            'start_outsole' => 'required|date',
            'finish_outsole' => 'required|date',
            'po_spk' => 'required|string|max:255',
            'model_name' => 'required|string|max:255',
            'style' => 'required|string|max:255',
            'output' => 'required|integer',
            'size_36' => 'nullable|integer',
            'size_37' => 'nullable|integer',
            'size_38' => 'nullable|integer',
            'size_39' => 'nullable|integer',
            'size_40' => 'nullable|integer',
            'size_41' => 'nullable|integer',
            'size_42' => 'nullable|integer',
        ]);

        // Memperbarui data
        $outsoleout->update($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('outsolesout.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OutsoleOut $test)
    {
        // Menghapus data
        $test->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('outsolesout.index')->with('success', 'Data berhasil dihapus.');
    }
}

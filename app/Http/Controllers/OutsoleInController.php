<?php

namespace App\Http\Controllers;

use App\Models\OutsoleIn;
use Illuminate\Http\Request;

class OutsoleInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua data dari tabel outsole_in
        $outsoles = OutsoleIn::all();
        $outsoles = OutsoleIn::all()->map(function ($outsole) {
            $outsole->total_size = $outsole->size_36 + $outsole->size_37 + $outsole->size_38 + $outsole->size_39 + $outsole->size_40 + $outsole->size_41 + $outsole->size_42;
            return $outsole;
        });

        // Mengirim data ke view (misalnya `outsoles.index`) untuk ditampilkan
        return view('outsoles.index', compact('outsoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan form untuk menambahkan data baru
        return view('outsoles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
            'input' => 'required|integer',
            'size_36' => 'nullable|integer',
            'size_37' => 'nullable|integer',
            'size_38' => 'nullable|integer',
            'size_39' => 'nullable|integer',
            'size_40' => 'nullable|integer',
            'size_41' => 'nullable|integer',
            'size_42' => 'nullable|integer',
        ]);

        // Membuat data baru
        OutsoleIn::create($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('outsoles.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OutsoleIn  $outsoleIn
     * @return \Illuminate\Http\Response
     */
    public function show(OutsoleIn $outsoleIn)
    {
        // Menampilkan detail data
        return view('outsoles.show', compact('outsoleIn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OutsoleIn  $outsoleIn
     * @return \Illuminate\Http\Response
     */
    public function edit(OutsoleIn $outsoleIn)
    {
        // Menampilkan form edit
        return view('outsoles.edit', compact('outsoleIn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OutsoleIn  $outsoleIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutsoleIn $outsole)
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
            'input' => 'required|integer',
            'size_36' => 'nullable|integer',
            'size_37' => 'nullable|integer',
            'size_38' => 'nullable|integer',
            'size_39' => 'nullable|integer',
            'size_40' => 'nullable|integer',
            'size_41' => 'nullable|integer',
            'size_42' => 'nullable|integer',
        ]);

        // Memperbarui data
        $outsole->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('outsoles.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OutsoleIn  $outsoleIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutsoleIn $outsole)
    {
        // Menghapus data
        $outsole->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('outsoles.index')->with('success', 'Data berhasil dihapus.');
    }

}

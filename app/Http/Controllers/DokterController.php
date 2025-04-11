<?php

namespace App\Http\Controllers;
use App\Models\Periksa;
use App\Models\Obat;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('dokter.index');
    }

    public function showMemeriksa()
    {
        $memeriksas = Periksa::latest()->get(); 
        $showPeriksa = Periksa::where('id_dokter', auth()->user()->id)->get();
        $showPasien = Periksa::with('pasien')->where('id_dokter', auth()->id())->latest()->get();
        $obats = Obat::latest()->get();
        
        return view('dokter.memeriksa', compact('memeriksas', 'showPeriksa', 'obats', 'showPasien'));
    }

    public function editMemeriksa($id)
    {
        $memeriksa = Periksa::findOrFail($id);
        $obats = Obat::latest()->get();
        return view('dokter.memeriksa.edit', compact('memeriksa', 'obats'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'catatan' => 'nullable|string',
            'tgl_periksa' => 'nullable|string',
            'biaya_periksa' => 'nullable|integer',
        ]);

        $memeriksa = Periksa::findOrFail($id);
        $memeriksa->update($validatedData);

        toastr()->success('Data Periksa Pasien berhasil diperbarui!');
        return redirect()->route('memeriksaDokter');
    }

    public function showObat()
    {
        $obats = Obat::latest()->get();
        return view('dokter.obat',  compact('obats'));
        
    }

    public function createObat(Request $request)
    {
        $validatedData = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string|max:255', 
            'harga' => 'required|string|max:255',
        ]);

        Obat::create($validatedData);

        toastr()->success('Obat Berhasil Ditambahkan');
        return redirect()->route('obatDokter');
    }
    
    public function editObat($id)
    {
        $obat = Obat::findOrFail($id);
        return view('dokter.obat.edit', compact('obat'));
    }

    public function updateObat(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string|max:255', 
            'harga' => 'required|string|max:255',
        ]);

        $obat = Obat::findOrFail($id);
        $obat->update($validatedData);

        toastr()->success('Obat Berhasil Diperbarui');
        return redirect()->route('obatDokter');
    }

    public function deleteObat($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        toastr()->success('Obat Berhasil Dihapus');
        return redirect()->route('obatDokter');
    }
}

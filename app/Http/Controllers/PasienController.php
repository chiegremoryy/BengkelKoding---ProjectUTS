<?php

namespace App\Http\Controllers;
use App\Models\Periksa;
use App\Models\User;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('pasien.dashboard');
    }

    public function showPeriksa()
    {
        $showPeriksa = Periksa::where('id_pasien', auth()->user()->id)->get();
        $showDokter = User::where('role', 'dokter')->get();
        return view('pasien.periksa', compact('showPeriksa', 'showDokter'));
    }

    public function create(request $request)
    {
        $validatedData = $request->validate([
            'id_dokter' => 'required',
            'id_pasien' => 'required',  
            'tgl_periksa' => 'nullable|string',
            'catatan' => 'nullable|string',
            'biaya_periksa' => 'nullable|integer',
        ]);

        Periksa::create([
            'id_dokter' => $validatedData['id_dokter'],
            'id_pasien' => $validatedData['id_pasien'],
        ]);
        
        toastr()->success('Janji Periksa telah Dibuat.');
        return redirect()->route('periksaPasien');
    }
}

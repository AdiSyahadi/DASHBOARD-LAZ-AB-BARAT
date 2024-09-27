<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporans;

class Laporan extends Controller
{
    public function index()
    {
        return view('landing.index');
    }
    public function create()
    {
        // Tampilkan formulir tambah laporan
        return view('admin.formlaporan');
    }
    
    public function store(Request $request)
    {
        Laporans::create($request->all());
        return redirect()->route('landing.index')->with('success', 'Laporan Berhasilahkan');
    }
    
    
}

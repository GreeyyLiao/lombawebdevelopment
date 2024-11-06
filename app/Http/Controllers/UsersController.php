<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $reports = Report::all();
        return view('users.users', compact('reports'));
    }

    public function createLaporan($userID) {
        return view('users.buat_laporan', compact('userID'));
    }

    public function storeLaporan($userID) 
{
    // Validasi input termasuk file foto
    $validatedData = request()->validate([
        'judul_laporan' => 'required|string|max:255',
        'description' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Simpan file foto jika ada
    $fileName = null; // Inisialisasi nama file sebagai null jika tidak ada foto
    if (request()->hasFile('gambar')) {
        // Simpan file di direktori 'public/reports' dan buat nama unik untuk file tersebut
        $fileName = time() . '.' . request()->gambar->extension();
        request()->gambar->storeAs('public/reports', $fileName);
    }

    // Simpan data laporan ke database
    Report::create([
        'user_id' => $userID,
        'judul_laporan' => $validatedData['judul_laporan'],
        'description' => $validatedData['description'],
        'gambar' => $fileName, // Menyimpan nama file ke kolom 'photo' di database
    ]);

    return redirect('/user')->with('success', 'Laporan berhasil disimpan!');
}


    public function edit($reportID) {
        $reports = Report::find($reportID);
        return view('users.edit_laporanUser', compact('reports'));
    }

    public function update($reportID) {
        $report = Report::find($reportID);
        $validatedData = request()->validate([
            'judul_laporan' => 'required|string|max:255',
            'description' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Simpan file foto jika ada
        $fileName = null; // Inisialisasi nama file sebagai null jika tidak ada foto
        if (request()->hasFile('gambar')) {
            $fileName = time() . '.' . request()->gambar->extension();
            request()->gambar->storeAs('public/reports', $fileName);
            $report->gambar = $fileName;
        }

        $report->update([
            'judul_laporan' => $validatedData['judul_laporan'],
            'description' => $validatedData['description'],
            'gambar' => $fileName,
        ]);

        return redirect('/user')->with('success', 'Laporan berhasil diupdate!');
    }

    public function delete($reportID) {
        Report::destroy($reportID);
        return redirect('/user');
    }
}

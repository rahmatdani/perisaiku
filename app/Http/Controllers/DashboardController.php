<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pendaftar',[
            "title" => "Home",
            "active" => "home",
            'biodata' => Biodata::latest()->first()
        ]);
    }

    public function profil()
    {
        return view('dashboard.profil', [
            'biodata' => Biodata::latest()->first()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jalur' => 'required',
            'jurusan1' => 'required',
            'jurusan2' => 'required',
            'alamat' => 'required',
            'foto' => 'mimes:png,jpg,jpeg',
            'no_hp' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'asal_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'mtk' => 'required',
            'mtk1' => 'required',
            'ipa' => 'required',
            'ipa1' => 'required',
            'b_ing' => 'required',
            'b_ing1' => 'required',
            // 'status' => 'required',
            'hp_ortu' => 'required',
            'agama' => 'required',
        ]);

        // dd($validatedData);

        $foto = $request->file('foto');
        $foto->storeAs('public/blogs', $foto->hashName());

        Biodata::create([
            'name'  => $request->name,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jalur' => $request->jalur,
            'jurusan1' => $request->jurusan1,
            'jurusan2' => $request->jurusan2,
            'alamat' => $request->alamat,
            'foto'     => $foto->hashName(),
            'no_hp' => $request->no_hp,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'mtk' => $request->mtk,
            'mtk1' => $request->mtk1,
            'ipa' => $request->ipa,
            'ipa1' => $request->ipa1,
            'b_ing' => $request->b_ing,
            'b_ing1' => $request->b_ing1,
            'hp_ortu' => $request->hp_ortu,
            'agama' => $request->agama,
        ]);


        // Biodata::create($validatedData);
        $request->session()->flash('success', 'Data Berhasil disimpan dan akan segera divalidasi');
        return redirect('/dashboard');


    }
}

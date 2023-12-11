<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $klien = DB::table('klien')->get();
        return view('klien.index', compact('klien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('klien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'tanggal_pernikahan' => 'required',
        ]);

        $query = DB::table('klien')->insert([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'nomor_telepon' => $request['nomor_telepon'],
            'alamat' => $request['alamat'],
            'tanggal_pernikahan' => $request['tanggal_pernikahan'],
        ]);

        return redirect('/klien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //SELECT * FROM klien WHERE id = $id
        $klien = DB::table('klien')->where('id', $id)->get();
        return view('klien.show', compact('klien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $klien = DB::table('klien')->where('id', $id)->get();
        return view('klien.edit', compact('klien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required|min:10|max:200',
            'tanggal_pernikahan' => 'required',
        ]);

        $query = DB::table('klien')->where('id', $id)->update([
            //'field yang ada di table' => $request['name yang dikirim dari form']
            'nama' => $request['nama'],
            'email' => $request['email'],
            'nomor_telepon' => $request['nomor_telepon'],
            'alamat' => $request['alamat'],
            'tanggal_pernikahan' => $request['tanggal_pernikahan'],
        ]);

        return redirect()->route('klien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('klien')->where('id', $id)->delete();
        return redirect()->route('klien.index');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Showroom;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showroom = Showroom::all();

        return view('showroom.index', compact('showroom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('showroom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->all();

        Showroom::create([
            'nama_mobil' => $data['name'],
            'brand_mobil' => $data['brand'],
            'warna_mobil' => $data['warna'],
            'tipe_mobil' => $data['tipe'],
            'harga_mobil' => $data['harga'],
        ]);

        return redirect(route('showroom.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showroom = Showroom::all();

        return view('showroom/index', compact('showroom'));

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

<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function view()
    {
        return view('view');
    }

    public function add()
    {
        return view('add');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createKaryawan(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string|min:5|max:20',
            'Umur' => 'required|integer|min:20',
            'Alamat' => 'required|string|min:10|max:40',
            'NomorTelp' => 'required|regex:[^08]|string|min:9|max:12',
        ]);
        Karyawan::create([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'NomorTelp' => $request->NomorTelp,
        ]);
        return redirect(route('getKaryawan'));
    }
    
    public function getKaryawan(){
        $kayawans = Karyawan::all();
        return view('view', ['karyawans' => $kayawans]);
    }

    public function updateKaryawan(Request $request, $id) {
        $karyawan = Karyawan::find($id);
        
        $request->validate([
            'Nama' => 'required|string|min:5|max:20',
            'Umur' => 'required|integer|min:20',
            'Alamat' => 'required|string|min:10|max:40',
            'NomorTelp' => 'required|regex:[^08]|string|min:9|max:12',
        ]);

        $karyawan -> update([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'NomorTelp' => $request->NomorTelp,
        ]);


        return redirect(route('getKaryawan'));
    }


    public function getKaryawanById($id) {
        $karyawan = Karyawan::find($id);
        return view('edit', ['karyawan' => $karyawan]);
    }



    public function deleteKaryawan($id){
        Karyawan::destroy($id);
        return redirect(route('getKaryawan'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, karyawan $karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */

    public function destroy(karyawan $karyawan)
    {
        //
    }
}

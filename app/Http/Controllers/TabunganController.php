<?php

namespace App\Http\Controllers;
use App\Siswa;
use App\Tabungan;
use Illuminate\Http\Request;
use DB;
class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlah_tabungan()
    {
        $tabungan=Tabungan::with('siswa')
            ->select('siswa_id',\DB::raw('sum(tabungans.jumlah_uang) as jumlah_uang')
            )
            ->groupBy('siswa_id')
            ->get();
           // dd($tabungan);
            return  view('tabungan.report',compact('tabungan'));
    }
    public function index()
    {
        $tabungan=Tabungan::with('siswa')->get();
        return view('tabungan.index',compact('tabungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Siswa::all();
        return view('tabungan.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabungan= new Tabungan;
        $tabungan->siswa_id= $request->siswa_id;
        $tabungan->jumlah_uang= $request->jumlah_uang;
        $tabungan->save();
        return redirect()->route('tabungan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Tabungan::findOrFail($id);
        $siswa=Siswa::all();
        return view('tabungan.show',compact('data','siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Tabungan::findOrFail($id);
        $siswa=Siswa::all();
        return view('tabungan.edit',compact('data','siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tabungan=Tabungan::findOrFail($id);
        $tabungan->siswa_id= $request->siswa_id;
        $tabungan->jumlah_uang= $request->jumlah_uang;
        $tabungan->save();
        return redirect()->route('tabungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabungan=Tabungan::findOrFail($id);
        $tabungan->delete();
        return redirect()->route('tabungan.index');
    }
}

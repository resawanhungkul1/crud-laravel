<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobi;
class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi=Hobi::all();
        return view('hobi.index',compact('hobi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hobi= new Hobi;
        $hobi->hobi=$request->hobi;
        $hobi->save();
        return redirect()->route('hobi.index')->with(['message'=>'Data hobi Berhasil Di Simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hobi=Hobi::findOrFail($id);
        return view('hobi.show',compact('hobi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobi=Hobi::findOrFail($id);
        return view('hobi.edit',compact('hobi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hobi=Hobi::findOrFail($id);
        $hobi->hobi=$request->hobi;
        $hobi->save();
        return redirect()->route('hobi.index')->with(['message'=>'data Berhasil Di update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hobi=Hobi::findOrFail($id);
        $hobi->delete();
        return redirect()->route('hobi.index')->with(['message'=>'Data Hobi Berhasil Di Hapus']);
    }
}

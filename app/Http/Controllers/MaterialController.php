<?php

namespace App\Http\Controllers;
use App\Material;
use App\Pembelian;
use DB;
use Auth;
use App\Exports\PembelianExport;
use App\Imports\PembelianImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;


class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material = Material::all();
        return view('material.index',compact('material'));
    }
    public function index_two($id)
    {
       $material = DB::table('pembelianmaterial')->where('material_id','=',$id)->get();
       return view('material.index-two',compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = new Material;
        $material->project = $request->project;
        $material->buying_date = $request->buying_date;
        $material->price = $request->price;
        $material->save();

        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function import()
    {
        Pembelian::import(new PembelianImport,request()->file('file'));
        return back();
    }
    public function export() 
    {
        return Excel::download(new PembelianExport, 'Data.xlsx');
    }
}

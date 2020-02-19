<?php

namespace App\Http\Controllers;
use App\Inventory;
use Illuminate\Http\Request;    
use App\Exports\InventarisExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = Inventory::paginate(5);
        return view('inventory.inventory',compact('inventory'));
    }
    public function autocomplete(Request $request)
    {
        $data = Inventory::select("stock_name")
                ->where("stock_name","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory = new Inventory;
        $inventory->stock_code = $request->stock_code;
        $inventory->stock_name = $request->stock_name;
        $inventory->stock_qty = $request->stock_qty;
        $inventory->stock_ket = $request->stock_ket;
        $inventory->save();

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
        $inventory = Inventory::find($id);
        return view('inventory.edit',compact('inventory'));
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
        $inventory = Inventory::find($id);
        $inventory->stock_code = $request->stock_code;
        $inventory->stock_name = $request->stock_name;
        $inventory->stock_qty = $request->stock_qty;
        $inventory->stock_ket = $request->stock_ket;
        $inventory->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();

        return back();
    }

    public function export() 
    {
        return Excel::download(new InventarisExport, 'inventaris.xlsx');
    }



}

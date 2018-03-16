<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::paginate(10);
        return view("supplier.supplier")->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request->all());exit();
        $supplier = new Supplier;
        $supplier->name = $request->post('name');
        $supplier->address = $request->post('address');
        $supplier->phone = $request->post('phone');
        $supplier->save();
         //$data = ['data1','data2','data3'];
         //var_dump($_POST);
         return redirect('supplier');
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
        //var_dump($id);exit();
        $supplier = Supplier::find($id);

        // show the edit form and pass the nerd
        return view('supplier.edit_supplier',compact('supplier','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //var_dump($request->all());exit();
        $supplier = Supplier::find($request->id);
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->phone = $request->phone;
        $supplier->save();
        return redirect('supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $supplier = Supplier::find($request->id);
        $supplier->delete();


        return redirect('supplier');
    }
}

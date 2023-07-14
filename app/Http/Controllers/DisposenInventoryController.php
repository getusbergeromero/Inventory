<?php

namespace App\Http\Controllers;

use App\Models\DisposenInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DisposenInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispose = DisposenInventory::get();
        return view('dispose')->with(['dispose' => $dispose]);
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
        $validator = validator::make(
            $request->all(),
            [
                'item_category' => 'required',
                'description' => 'required',
                'serial_no' => 'required',
                'inventory_tag_no' => 'required'
            ]
        );
        $dispose = new DisposenInventory;
        $dispose->item_category = $request->item_category;
        $dispose->description = $request->description;
        $dispose->serial_no = $request->serial_no;
        $dispose->inventory_tag_no = $request->inventory_tag_no;
        $dispose->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DisposenInventory  $disposenInventory
     * @return \Illuminate\Http\Response
     */
    public function show(DisposenInventory $disposenInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DisposenInventory  $disposenInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(DisposenInventory $disposenInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DisposenInventory  $disposenInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisposenInventory $disposenInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DisposenInventory  $disposenInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisposenInventory $disposenInventory)
    {
        //
    }
}

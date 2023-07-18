<?php

namespace App\Http\Controllers;

use App\Models\depInventory;
use App\Models\incoming;
use App\Models\personnels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class DepInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $deploy = depInventory::get();

        $incomings = Category::leftJoin('incomings', 'categories.id', '=', 'incomings.category_id')
            ->get();
        $personnels = personnels::get();
        return view('deploy')->with(['deploy' => $deploy, 'incomings' => $incomings, 'personnels' => $personnels]);
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
                'inventory_tag_no' => 'required',
                'personnel_id' => 'required',
                'incoming_id' => 'required'
            ]
        );
        $deploy = new depInventory;
        $deploy->acknowledgement_no = uniqid();
        $deploy->inventory_tag_no = $request->inventory_tag_no;
        $deploy->personnel_id = $request->personnel_id;
        $deploy->incoming_id = $request->incoming_id;
        $deploy->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\depInventory  $depInventory
     * @return \Illuminate\Http\Response
     */
    public function show(depInventory $depInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\depInventory  $depInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(depInventory $depInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\depInventory  $depInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depInventory $depInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\depInventory  $depInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(depInventory $depInventory)
    {
        //
    }
}

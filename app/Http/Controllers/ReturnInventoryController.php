<?php

namespace App\Http\Controllers;

use App\Models\depInventory;
use App\Models\ReturnInventory;
use App\Models\incoming;
use App\Models\personnels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReturnInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $return = ReturnInventory::join('incomings', 'incomings.id', '=', 'return_inventories.incoming_id')
            ->join('personnels', 'personnels.id', '=', 'return_inventories.personnel_id')
            ->join('dep_inventories', 'dep_inventories.id', '=', 'return_inventories.deploy_id')
            ->join('categories', 'categories.id',  '=', 'incomings.category_id')
            ->select('*')
            ->get();


        $incomings = incoming::get();
        $personnels = personnels::get();
        $deploy = depInventory::get();
        return view('return')->with(['return' => $return, 'incomings' => $incomings, 'personnels' => $personnels, 'deploy' => $deploy]);
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
                'remarks' => 'required',
                'personnel_id' => 'required',
                'incoming_id' => 'required',
                'status' => 'required',
                'deploy_id' => 'deploy_id'
            ]
        );
        $return = new ReturnInventory;
        $return->remarks = $request->remarks;
        $return->personnel_id = $request->personnel_id;
        $return->incoming_id = $request->incoming_id;
        $return->status = $request->status;
        $return->deploy_id = $request->deploy_id;


        $return->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReturnInventory  $returnInventory
     * @return \Illuminate\Http\Response
     */
    public function show(ReturnInventory $returnInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReturnInventory  $returnInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(ReturnInventory $returnInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReturnInventory  $returnInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReturnInventory $returnInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReturnInventory  $returnInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReturnInventory $returnInventory)
    {
        //
    }
}

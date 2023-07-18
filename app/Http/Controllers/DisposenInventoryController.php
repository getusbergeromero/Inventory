<?php

namespace App\Http\Controllers;

use App\Models\DisposenInventory;
use App\Models\depInventory;
use App\Models\incoming;
use App\Models\Category;
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
         $dispose = DisposenInventory::leftJoin(
            'incomings',
            'disposen_inventories.incoming_id',
            '=',
            'incomings.id'
        )
            ->leftJoin(
                'dep_inventories',
                'disposen_inventories.inventory_tag_no',
                '=',
                'dep_inventories.id'
            )->leftJoin(
                'categories',
                'incomings.category_id',
                '=',
                'categories.id'
            )
            ->get();
        $deploy = depInventory::get();

        $incomings = Category::leftJoin('incomings', 'categories.id', '=', 'incomings.category_id')
            ->get();
        $Category = Category::get();
        return view('dispose')->with(['dispose' => $dispose, 'incomings' => $incomings, 'deploy' => $deploy, 'Category' => $Category]);
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

                'incoming_id' => 'required',
                'inventory_tag_no' => 'required'
            ]
        );
        $dispose = new DisposenInventory;

        $dispose->incoming_id = $request->incoming_id;
        $dispose->inventory_tag_no = $request->inventory_tag_no;
        $dispose->save();

        return redirect('/dispose');
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

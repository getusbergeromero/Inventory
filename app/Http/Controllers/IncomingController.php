<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\incoming;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incoming = incoming::with('subcategories')->get();
        $categories = Category::get();
        return view('incoming')->with(['incoming' => $incoming, 'categories' => $categories]);
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
        $validator = Validator::make(
            $request->all(),
            [
                'item_category' => 'required',
                'item_sub_category' => 'required',
                'description' => 'required',
                'serial_no' => 'required'
            ]

        );
        $incoming = new incoming;
        $incoming->category_id = $request->category_id;
        $incoming->item_sub_category = $request->check ? 1 : 0;
        $incoming->description = $request->description;
        $incoming->serial_no = $request->serial_no;
        $incoming->save();

        if ($request->check == true) {
            $Subcategory = new Subcategory;
            $Subcategory->processor = $request->processor;
            $Subcategory->memory = $request->memory;
            $Subcategory->storage_drive = $request->storage_drive;
            $Subcategory->motherboard = $request->motherboard;
            $Subcategory->incoming_id = $incoming->id;
            $Subcategory->save();
        }

        return redirect()->back();
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
}

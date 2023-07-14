<?php

namespace App\Http\Controllers;

use App\Models\personnels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel = personnels::get();
        return view('personnel')->with(['personnel' => $personnel]);
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
                'personnel_name' => 'required',
                'position' => 'required',
                'department' => 'required',
                'office' => 'required'
            ]

        );
        $personnel = new personnels;
        $personnel->personnel_name = $request->personnel_name;
        $personnel->position = $request->position;
        $personnel->department = $request->department;
        $personnel->office = $request->office;
        $personnel->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(personnels $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(personnels $personnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personnels $personnel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(personnels $personnel)
    {
        //
    }
}

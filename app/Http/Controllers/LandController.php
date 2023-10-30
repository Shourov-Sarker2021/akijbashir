<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $lands=Land::latest()->paginate('10');
         return view('lands.index',compact('lands'))->with('i',(request('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'land_name'=>'required',
            'address'=>'required',
            'owner'=>'required',
            'country'=>'required',
        ]);

        $input=$request->all();
        Land::create($input);
        return redirect()->route('land.index')->with('success',"Land Create Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function show(Land $land)
    {
        return view('lands.details',compact('land'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function edit(Land $land)
    {
        return view('lands.edit',compact('land'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Land $land)
    {
        $request->validate([
            'land_name'=>'required',
            'address'=>'required',
            'owner'=>'required',
            'country'=>'required',
        ]);

        $input=$request->all();
        $land->update($input);
        return redirect()->route('land.index')->with('success',"Land Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function destroy(Land $land)
    {
        $land->delete();
        return redirect()->route('land.index')->with('success',"Land Delete Successfully");
    }
}

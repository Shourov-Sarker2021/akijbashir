<?php

namespace App\Http\Controllers;

use App\Models\Resturent;
use Illuminate\Http\Request;

class ResturentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resturents=Resturent::latest()->paginate(10);
        return view('resturents.index',compact('resturents'))->with('i',(request('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resturents.create');
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
            'name'=>'required',
            'location'=>'required',
            'menu'=>'required',
            'owner'=>'required',
        ]);

        $input=$request->all();
        Resturent::create($input);
        return redirect()->route('resturent.index')->with('success',"Resturent Create Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function show(Resturent $resturent)
    {
        return view('resturents.show', compact('resturent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function edit(Resturent $resturent)
    {
        return view('resturents.edit', compact('resturent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resturent $resturent)
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'menu'=>'required',
            'owner'=>'required',
        ]);

        $input=$request->all();
        $resturent->update($input);
        return redirect()->route('resturent.index')->with('success',"Resturent Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resturent  $resturent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resturent $resturent)
    {
        $resturent->delete();
        return redirect()->route('resturent.index')->with('success',"Resturent Delete Successfully");

    }
}

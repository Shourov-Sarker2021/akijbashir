<?php

namespace App\Http\Controllers;

use App\Models\Akij;
use Illuminate\Http\Request;

class AkijController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akijs=Akij::latest()->paginate(10);
        return view('akij.index',compact('akijs'))->with('i',(request('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akij.create');
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
            'full_name'=>'required',
            'email'=>'required',
            'mobile'=>'required|min:10',
            'address'=>'required',
            'user_name'=>'required|min:6',
            'password'=>'required|min:8',
        ]);

        $input=$request->all();
        Akij::create($input);
        //return "Data Create Successfully";
        return redirect()->route('akijs.index')->with('success',"Data Create Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akij  $akij
     * @return \Illuminate\Http\Response
     */
    public function show(Akij $akij)
    {
        return view('akij.show',compact('akij'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akij  $akij
     * @return \Illuminate\Http\Response
     */
    public function edit(Akij $akij)
    {
        return view('akij.edit',compact('akij'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akij  $akij
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akij $akij)
    {
        $request->validate([
            'full_name'=>'required',
            'email'=>'required',
            'mobile'=>'required|min:10',
            'address'=>'required',
            'user_name'=>'required|min:6',
            'password'=>'required|min:8',
        ]);

        $input=$request->all();
        $akij->update($input);
        //return "Data Create Successfully";
        return redirect()->route('akijs.index')->with('success',"Data Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akij  $akij
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akij $akij)
    {
        $akij->delete();
        return redirect()->route('akijs.index')->with('success',"Person Delete Succesfully");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\wholesale;
use Illuminate\Http\Request;

class WholesaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wholesale = Wholesale::latest()->paginate(5);
    
        return view('wholesale.index',compact('wholesale'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wholesale.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
         Wholesale::create($request->all());
     
        return redirect()->route('wholesale.index')
                        ->with('success','Application to Become a Correct Toes Dealer made Successfuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function show(wholesale $wholesale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function edit(wholesale $wholesale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wholesale $wholesale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function destroy(wholesale $wholesale)
    {
        //
    }
}

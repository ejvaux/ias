<?php

namespace App\Http\Controllers;

use App\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('text') == ''){
            $plants = Plants::orderBy('id','DESC')->paginate(20);
        }
        else{
            $s = $request->input('text');
            $plants = Plants::where('name','like','%'.$s.'%')->orwhere('sname','like','%'.$s.'%')->orderBy('id','DESC')->paginate(20);
        }
        return view('tables.plantsTable',compact('plants'));
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
        $p = new Plants;
        $p->name = $request->input('name');
        $p->sname = $request->input('sname');
        $p->user_id = Auth::id();
        $p->save();
        return [
            'type' => 'success',
            'message' => 'Data Successfully Saved.'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function show(Plants $plants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit(Plants $plants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plants $plants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plants $plants)
    {
        //
    }
}

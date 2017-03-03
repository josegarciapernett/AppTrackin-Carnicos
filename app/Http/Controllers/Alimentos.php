<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Alimento; 


class Alimentos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        $alimento = Alimento::all();
        return view('alimentos.index',['alimento' => $alimento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new date

        return view('alimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //request es un objeto que se indjetsa por laravel
    public function store(Request $request) 
    {
        //
        $this->validate($request, [

            'nombre_alimento' => 'required',
            'temp_max' => 'required',
            'temp_min' => 'required',
        ]);


        $alimento = new alimento;
         $alimento->nombre_alimento = $request->nombre_alimento;
         $alimento->temp_max = $request->temp_max;
         $alimento->temp_min = $request->temp_min;
         $alimento->save();
         return redirect()->route('alimentos.index')->with('alert-succes','Date Hasbeen saved');
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
        $alimento =  alimento::findOrFail($id);
        return view('alimentos.edit',compact('alimento'));
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
        // validaciones
         $this->validate($request, [

            'nombre_alimento' => 'required',
            'temp_max' => 'required',
            'temp_min' => 'required',
        ]);

         $alimento = alimento::findOrFail($id);
        $alimento->nombre_alimento = $request->nombre_alimento;
         $alimento->temp_max = $request->temp_max;
         $alimento->temp_min = $request->temp_min;


         return redirect()->route('alimentos.index')->with('alert-succes','Data Hasbeen Saved!');
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

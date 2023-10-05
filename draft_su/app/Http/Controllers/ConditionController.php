<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;

class ConditionController extends Controller
{
    function __construct(){
        $this->middleware('permission:ver-conditions|crear-conditions|editar-conditions|borrar-conditions', ['only'=>['index']]);
        $this->middleware('permission:crear-conditions', ['only'=>['create','store']]);
        $this->middleware('permission:editar-conditions', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-conditions', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditions = Condition::paginate(5);
        return view('conditions.index', compact('conditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conditions.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'attending_su',
            'name_surveyor',
            'master_name',
            'chief_name',
            'witness_dought',
            'witness_tank',
            'ship_location',
            'weather_temp',
            'sea_condition',
            'heading_ship',
            'direction_wind',
            'stream_speed',
            'tide',
            'ice',
        ]);
        Condition::create($request->all());
        return redirect()->route('conditions.index');
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
    public function edit(Condition $condition)
    {
        return view('conditions.editar', compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condition $condition)
    {
        request()->validate([
            'attending_su',
            'name_surveyor',
            'master_name',
            'chief_name',
            'witness_dought',
            'witness_tank',
            'ship_location',
            'weather_temp',
            'sea_condition',
            'heading_ship',
            'direction_wind',
            'stream_speed',
            'tide',
            'ice',
        ]);
        $condition->update($request->all());
        return redirect()->route('conditions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conditions = Conditions::find($id);

        if (!$conditions) {
            return redirect()->route('conditions.index')->with('error', 'El registro no se encontró.');
        }

        $conditions->delete();
        return redirect()->route('conditions.index');
        }
}

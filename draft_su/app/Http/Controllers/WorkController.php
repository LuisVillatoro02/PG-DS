<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work_Order;

class WorkController extends Controller
{
    function __construct(){
        $this->middleware('permission:ver-work|crear-work|editar-work|borrar-work', ['only'=>['index']]);
        $this->middleware('permission:crear-work', ['only'=>['create','store']]);
        $this->middleware('permission:editar-work', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-work', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work_Order::paginate(5);
        return view('work.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work.crear');
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
            'file_no' => 'required',
            'branch'  => 'required',
            'terminal'=> 'required',
            'product' => 'required',
            'vessel'  => 'required',
            'file_status'=>'required',
            'eta'=>'required',
            'charge'=>'required',
            'types'=>'required'
        ]);
        Work_Order::create($request->all());
        return redirect()->route('works.index');
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
    public function edit(Work_Order $work)
    {
        return view('work.editar', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work_Order $work)
    {
        request()->validate([
            'file_no' => 'required',
            'branch'  => 'required',
            'terminal'=> 'required',
            'product' => 'required',
            'vessel'  => 'required',
            'file_status'=>'required',
            'eta'=>'required',
            'charge'=>'required',
            'types'=>'required'
        ]);
        $work->update($request->all());
        return redirect()->route('works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work_Order::find($id);

        if (!$work) {
            return redirect()->route('works.index')->with('error', 'El registro no se encontró.');
        }

        $work->delete();
        return redirect()->route('works.index');
        }
}

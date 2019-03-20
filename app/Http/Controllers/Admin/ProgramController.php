<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Program::all();
        // dd($data);
        return view('admin.program.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = new Program;
        return view('admin.program.create', compact('row'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'label' => 'required',
        ]);
        $row = Program::create($request->all());
        
        $row->save();
        $message = trans('t.saved_successfully');

        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.program.show', $row);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Program::findOrFail($id);
        return view('admin.program.show', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Program::findOrFail($id);
        return view('admin.program.edit', compact('row'));
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
        $this->validate($request, [
            'label' => 'required',
        ]);
        $row = Program::findOrFail($id);
        $row->update($request->all());
        
        $row->save();

        $message = trans('t.updated_successfully');

        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.program.show', $row);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Program::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.program.index');
    }
}

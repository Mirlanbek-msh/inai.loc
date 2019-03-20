<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\Module;
use App\Models\Specialisation;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Curriculum::all();
        // dd($data);
        return view('admin.curriculum.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = new Curriculum;
        $modules = Module::all();
        $modules = $modules->pluck('label', 'ID');
        $specialisations = Specialisation::all();
        $specialisations = $specialisations->pluck('label', 'ID');
        return view('admin.curriculum.create', compact('row', 'modules', 'specialisations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'module_id' => 'required',
        // ]);
        $row = Curriculum::create($request->all());
        
        $row->save();
        $message = trans('t.saved_successfully');

        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.curriculum.show', $row);
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
        $row = Curriculum::findOrFail($id);
        return view('admin.curriculum.show', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Curriculum::findOrFail($id);
        $modules = Module::all();
        $modules = $modules->pluck('label', 'ID');
        $specialisations = Specialisation::all();
        $specialisations = $specialisations->pluck('label', 'ID');
        return view('admin.curriculum.edit', compact('row', 'modules', 'specialisations'));
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
        // $this->validate($request, [
        //     'module_id' => 'required',
        // ]);
        $row = Curriculum::findOrFail($id);
        $row->update($request->all());
        
        $row->save();

        $message = trans('t.updated_successfully');

        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.curriculum.show', $row);
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
        Curriculum::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.curriculum.index');
    }
}

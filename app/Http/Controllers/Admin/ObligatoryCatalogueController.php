<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ObligatoryCatalogue;
use App\Models\Module;

class ObligatoryCatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ObligatoryCatalogue::all();
        // dd($data);
        return view('admin.obligatory-catalogue.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = new ObligatoryCatalogue;
        $modules = Module::all();
        $modules = $modules->pluck('label', 'ID');
        return view('admin.obligatory-catalogue.create', compact('row', 'modules'));
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
            'placeholder_module_id' => 'required',
            'obligatory_module_id' => 'required',
        ]);
        $row = ObligatoryCatalogue::create($request->all());
        
        $row->save();
        $message = trans('t.saved_successfully');

        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.obligatory-catalogue.show', $row);
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
        $row = ObligatoryCatalogue::findOrFail($id);
        return view('admin.obligatory-catalogue.show', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = ObligatoryCatalogue::findOrFail($id);
        $modules = Module::all();
        $modules = $modules->pluck('label', 'ID');
        return view('admin.obligatory-catalogue.edit', compact('row', 'modules'));
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
            'placeholder_module_id' => 'required',
            'obligatory_module_id' => 'required',
        ]);
        $row = ObligatoryCatalogue::findOrFail($id);
        $row->update($request->all());
        
        $row->save();

        $message = trans('t.updated_successfully');

        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.obligatory-catalogue.show', $row);
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
        ObligatoryCatalogue::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.obligatory-catalogue.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specialisation;
use App\Models\Program;

class SpecialisationController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $data = Specialisation::all();
    //    dd($data->first()->program);
       return view('admin.specialisation.index', compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       $row = new Specialisation;
       $programs = Program::all();
       $programs = $programs->pluck('label', 'ID');
       return view('admin.specialisation.create', compact('row', 'programs'));
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
       $row = Specialisation::create($request->all());
       
       $row->save();
       $message = trans('t.saved_successfully');

       if($row){
           toast($message,'success','top-right');
           return redirect()->route('admin.specialisation.show', $row);
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
       $row = Specialisation::findOrFail($id);
       return view('admin.specialisation.show', compact('row'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $row = Specialisation::findOrFail($id);
       $programs = Program::all();
       $programs = $programs->pluck('label', 'ID');
       return view('admin.specialisation.edit', compact('row', 'programs'));
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
       $row = Specialisation::findOrFail($id);
       $row->update($request->all());
       
       $row->save();

       $message = trans('t.updated_successfully');

       if($row){
           toast($message,'success','top-right');
           return redirect()->route('admin.specialisation.show', $row);
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
       Specialisation::findOrFail($id)->delete();
       toast(trans('t.removed_successfully'), 'info', 'top-right');
       return redirect()->route('admin.specialisation.index');
   }
}

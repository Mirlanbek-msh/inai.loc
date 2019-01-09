<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('admin.contact.index', compact('data'));
    }

    // public function show($id)
    // {
    //     $row = Contact::findOrFail($id);
    //     return view('admin.gallery.show', compact('row'));
    // }

    public function toggle($id)
    {
        Contact::findOrFail($id)->toggleStatus();
        toast(trans('t.status_updated'), 'info', 'top-right');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Contact::findOrFail($id);
        $valueRuOptions = [
            "class" => "form-control",
            'maxlength' => '191',
            'pattern' => $row->pattern,
            'placeholder' => $row->placeholder,
            'data-error' => trans('validation.regex',['attribute' => ''])." "
                .trans('t.example').": $row->placeholder"
        ];
        if($row->important) $valueRuOptions['required'] = 'required';
        $valueEnOptions = [
            "class" => "form-control",
            'maxlength' => '191',
            'pattern' => $row->pattern, 
            'placeholder' => $row->placeholder,
            'data-error' => trans('validation.regex',['attribute' => ''])
        ];
        $data = compact('row', 'valueRuOptions', 'valueEnOptions');
        return view('admin.contact.edit', compact('row', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation_array = [];
        $row = Contact::findOrFail($id);
        if($row->important) $validation_array['value.ru'] = 'required';
        $this->validate($request, $validation_array);
        $row->fill($request->all());
        $row->save();
        $message = trans('t.updated_successfully');
        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.contact.index');
        }
    }
}

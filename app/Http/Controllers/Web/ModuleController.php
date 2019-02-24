<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Specialisation;
use App\Models\ObligatoryCatalogue;

class ModuleController extends Controller
{
    public function index()
    {
        $data = Module::all();
        $title = trans('t.list_of_all_modules');
        return view('web.module.index', compact('data', 'title'));
    }

    public function show($slug)
    {
        $specialisation = Specialisation::where('slug', $slug)->firstOrFail();
        $title = $specialisation->label;
        $curricula = $specialisation->curricula;
        $data = collect();
        foreach($curricula as $curriculum){
            $data->push($curriculum->module);
        }
        return view('web.module.index', compact('data', 'title'));
    }

    public function obModules()
    {
        $obCatalogues = ObligatoryCatalogue::where(function($query){
            $query->where('placeholder_module_id', 207)
                ->orWhere('placeholder_module_id', 208);
        })->get();
        $title = 'Obligatory Modules';
        $data = collect();
        foreach($obCatalogues as $obCatalogue){
            $data->push($obCatalogue->obligatoryModule);
        }
        return view('web.module.index', compact('data', 'title'));
    }
}

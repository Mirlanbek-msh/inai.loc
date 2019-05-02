<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specialisation;
use App\Models\ObligatoryCatalogue;
use Illuminate\Support\Facades\DB;
use App\Models\Curriculum;
use App\Models\Module;

class ModuleController extends Controller
{
    public function index()
    {
        $data = Module::all();
        // $data = DB::connection('mysql2')->select('SELECT DISTINCT m.id, m.nr, m.label, c.semester, m.ects, m.professor, m.content, m.learning_goals, m.literature,m.preliminary_knowledge, m.preliminary_work, m.examination, m.exam_duration
        // FROM module m left join curricula c on m.id = c.module_id;');
        // dd($data);
        $title = trans('t.list_of_all_modules');
        return view('web.module.index', compact('data', 'title'));
    }

    public function obModules()
    {
        // $data = DB::connection('mysql2')->select('SELECT if(o.placeholder_module_id = 207, REPLACE(o.placeholder_module_id, 207, 1), REPLACE(o.placeholder_module_id, 208, 2)  ) as placeholder_module, m.*, s.label as specialisation 
        // FROM module m left join obligatorycatalogue o on m.id = o.obligatory_module_id 
        // left join specialisation s on s.id = o.obligatory_module_id 
        // WHERE o.placeholder_module_id = 207 or o.placeholder_module_id = 208;');
        // $title = $data[0]->specialisation;
        // dd($data);
        $obCatalogues = ObligatoryCatalogue::where(function($query){
            $query->where('placeholder_module_id', 207)
                ->orWhere('placeholder_module_id', 208);
        })->get();
        $title = 'Obligatory Modules';
        $title = trans('t.obligatory_modules');
        $data = collect();
        foreach($obCatalogues as $obCatalogue){
            $data->push($obCatalogue->obligatoryModule);
        }
        return view('web.module.obCatalogue', compact('data', 'title'));
    }

    public function show($slug)
    {
        $specialisation = Specialisation::where('slug', $slug)->firstOrFail();
        $title = $specialisation->label_lang;
        $data = $specialisation->curricula;
        return view('web.module.show', compact('data', 'title'));
    }
}

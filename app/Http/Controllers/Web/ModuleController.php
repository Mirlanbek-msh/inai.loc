<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Specialisation;
use App\Models\ObligatoryCatalogue;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    public function index()
    {
        $data = Module::all();
        $data = DB::connection('mysql2')->select('SELECT DISTINCT m.id, m.nr, m.label, c.semester, m.ects, m.professor, m.content, m.learning_goals, m.literature,m.preliminary_knowledge, m.preliminary_work, m.examination, m.exam_duration
        FROM module m left join curricula c on m.id = c.module_id;');
        $title = trans('t.list_of_all_modules');
        $semester = true;
        // dd($data->first()->curriculum);
        return view('web.module.index', compact('data', 'title', 'semester'));
    }

    public function softwareTechnologies()
    {
        $data = DB::connection('mysql2')->select('SELECT m.id, m.nr, m.label, c.semester, m.ects, m.professor, m.content, m.learning_goals, m.literature,m.preliminary_knowledge, m.preliminary_work, m.examination, m.exam_duration, c.comment, c.specialisation_id,  s.label as specialisation FROM module m 
        left join curricula c on m.id = c.module_id  left join 
        specialisation s on s.id = c.specialisation_id WHERE s.id = 1;');
        $title = $data[0]->specialisation;
        $semester = true;
        // $specialisation = Specialisation::findOrFail(1);
        // $title = $specialisation->label;
        // $curricula = $specialisation->curricula;
        // $data = collect();
        // foreach($curricula as $curriculum){
        //     $data->push($curriculum->module);
        // }
        return view('web.module.index', compact('data', 'title', 'semester'));
    }

    public function medicalInformatics()
    {
        $data = DB::connection('mysql2')->select('SELECT m.id, m.nr, m.label, c.semester, m.ects, m.professor, m.content, m.learning_goals, m.literature,m.preliminary_knowledge, m.preliminary_work, m.examination, m.exam_duration, c.comment, c.specialisation_id,  s.label as specialisation FROM module m 
        left join curricula c on m.id = c.module_id  left join 
        specialisation s on s.id = c.specialisation_id WHERE s.id = 3;');
        $title = $data[0]->specialisation;
        $semester = true;
        // $specialisation = Specialisation::findOrFail(3);
        // $title = $specialisation->label;
        // $curricula = $specialisation->curricula;
        // $data = collect();
        // foreach($curricula as $curriculum){
        //     $data->push($curriculum->module);
        // }
        return view('web.module.index', compact('data', 'title', 'semester'));
    }

    public function webInformatics()
    {
        $data = DB::connection('mysql2')->select('SELECT m.id, m.nr, m.label, c.semester, m.ects, m.professor, m.content, m.learning_goals, m.literature,m.preliminary_knowledge, m.preliminary_work, m.examination, m.exam_duration, c.comment, c.specialisation_id,  s.label as specialisation FROM module m 
        left join curricula c on m.id = c.module_id  left join 
        specialisation s on s.id = c.specialisation_id WHERE s.id = 2;');
        $title = $data[0]->specialisation;
        $semester = true;
        // $specialisation = Specialisation::findOrFail(2);
        // $title = $specialisation->label;
        // $curricula = $specialisation->curricula;
        // $data = collect();
        // foreach($curricula as $curriculum){
        //     $data->push($curriculum->module);
        // }
        return view('web.module.index', compact('data', 'title', 'semester'));
    }

    public function obModules()
    {
        // $data = DB::connection('mysql2')->select('SELECT if(o.placeholder_module_id = 207, REPLACE(o.placeholder_module_id, 207, 1), REPLACE(o.placeholder_module_id, 208, 2)  ) as placeholder_module, m.*, s.label as specialisation 
        // FROM module m left join obligatorycatalogue o on m.id = o.obligatory_module_id 
        // left join specialisation s on s.id = o.obligatory_module_id 
        // WHERE o.placeholder_module_id = 207 or o.placeholder_module_id = 208;');
        // $title = $data[0]->specialisation;
        // dd($data);
        $semester = false;
        $obCatalogue = true;
        $obCatalogues = ObligatoryCatalogue::where(function($query){
            $query->where('placeholder_module_id', 207)
                ->orWhere('placeholder_module_id', 208);
        })->get();
        $title = 'Obligatory Modules';
        $data = collect();
        foreach($obCatalogues as $obCatalogue){
            $data->push($obCatalogue->obligatoryModule);
        }
        // dd($data->first()->obligatoryCatalogue()->get());
        return view('web.module.index', compact('data', 'title', 'semester', 'obCatalogue'));
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
}

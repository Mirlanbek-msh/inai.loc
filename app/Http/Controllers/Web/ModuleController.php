<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Program;
use App\Models\Specialisation;

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

    public function obModules($programId)
    {
        $title = trans('t.obligatory_modules');
        /** @var Program $program */
        $program = Program::find($programId);
        $data=$program->getInvolvedObligatoryModules();

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

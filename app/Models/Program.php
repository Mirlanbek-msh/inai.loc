<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Program extends Model
{
   // protected $connection = 'mysql2';
    protected $table = 'programms';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'licensed',

        'label',
        'degree',

        'label_ru',
        'degree_ru',
    ];

    public function getLabelLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->label_ru) > 0) return $this->label_ru;
        return $this->label;
    }

    public function getDegreeLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->degree_ru) > 0) return $this->degree_ru;
        return $this->degree;
    }

    public function specialisations()
    {
        return $this->hasMany(Specialisation::class, 'programm_id');
    }

    public function licensedYear()
    {
        return  date('Y', strtotime($this->licensed));
    }

    private static function isModuleIncluded( $module,array $allModules) {
        return key_exists($module->getKey(),$allModules);
    }

    /**
     * @return Module[]
     */
    public function getInvolvedObligatoryPlaceholders() {
        $allPlaceholderModules = ObligatoryCatalogue::getAllPlaceholderModules();
        $involvedPlaceholderModules = [];

        foreach ($this->specialisations as $specialisation) {
            foreach ($specialisation->curricula as $modulToSpecAssignment) {
                $module=$modulToSpecAssignment->module;
                if ($this->isModuleIncluded($module,$allPlaceholderModules)
                    && !$this->isModuleIncluded($module,$involvedPlaceholderModules)) {
                    $involvedPlaceholderModules[$module->getKey()]=$module;
                }
            }
        }
        return $involvedPlaceholderModules;
    }

    public function getInvolvedObligatoryModules() : Collection
    {
        $involvedObligatoryModules=collect();
        $involvedObligatoryPlaceholders = $this->getInvolvedObligatoryPlaceholders();

        $allObligatoryModules = ObligatoryCatalogue::all();
        /** @var ObligatoryCatalogue $obligatoryCatalogueModule */
        foreach ($allObligatoryModules as $obligatoryCatalogueModule) {
            if (key_exists($obligatoryCatalogueModule->placeholder_module_id, $involvedObligatoryPlaceholders)) {
                $involvedObligatoryModules->push($obligatoryCatalogueModule->obligatoryModule);
            }
        }
        return $involvedObligatoryModules;
    }

}

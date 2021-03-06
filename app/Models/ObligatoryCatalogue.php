<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObligatoryCatalogue extends Model
{
   // protected $connection = 'mysql2';
    protected $table = 'obligatory_catalogues';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'placeholder_module_id',
        'obligatory_module_id',

        'comment',
        'comment_ru'
    ];

    public function getCommentLangAttribute()
    {
        if(app()->getLocale() == 'ru' && strlen($this->comment_ru) > 0) return $this->comment_ru;
        return $this->comment;
    }

    public function placeholderModule()
    {
        return $this->belongsTo(Module::class, 'placeholder_module_id', 'id')->withDefault();
    }



    /**
     * @return Module[]
     */
    public static function getAllPlaceholderModules() {
        $allPlaceholderModules=[];
        foreach (ObligatoryCatalogue::all() as $obligatoryCatalogueModule) {
            $placeholderModule=$obligatoryCatalogueModule->placeholderModule;
            if (!key_exists($placeholderModule->getKey(),$allPlaceholderModules)) {
                $allPlaceholderModules[$placeholderModule->getKey()]=$placeholderModule;
            }
        }
        return $allPlaceholderModules;
    }

    public function obligatoryModule()
    {
        return $this->belongsTo(Module::class, 'obligatory_module_id');
    }
}

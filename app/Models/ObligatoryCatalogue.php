<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObligatoryCatalogue extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'obligatorycatalogue';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'placeholder_module_id',
        'obligatory_module_id',
        'comment',
    ];


    public function placeholderModule()
    {
        return $this->belongsTo(Module::class, 'placeholder_module_id', 'ID')->withDefault();
    }

    public function obligatoryModule()
    {
        return $this->belongsTo(Module::class, 'obligatory_module_id');
    }
}

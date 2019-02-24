<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObligatoryCatalogue extends Model
{
    public function placeholderModule()
    {
        return $this->belongsTo(Module::class, 'placeholder_module_id');
    }

    public function obligatoryModule()
    {
        return $this->belongsTo(Module::class, 'obligatory_module_id');
    }
}

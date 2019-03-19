<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public function module()
    {
        return $this->belongsTo(Module::class)->withDefault();
    }

    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class)->withDefault();
    }
}

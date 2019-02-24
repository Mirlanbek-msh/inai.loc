<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class)->withDefault();
    }

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class)->withDefault();
    }
}

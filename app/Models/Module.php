<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function curriculum()
    {
        return $this->hasOne(Curriculum::class)->withDefault();
    }
}

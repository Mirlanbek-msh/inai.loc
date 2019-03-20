<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'module';
    protected $primaryKey = 'ID';
    public $timestamps = false;



    public function curriculum()
    {
        return $this->hasOne(Curriculum::class, 'module_id')->withDefault();
    }
}

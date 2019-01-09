<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'value',
        'status',
    ];

    protected $casts = [
        'value' => 'json'
    ];

    public function toggleStatus()
    {
        $this->status = !$this->status;
        $this->save();
    }

    public function getValueLangAttribute()
    {
        return isset($this->value[app()->getLocale()]) ? $this->value[app()->getLocale()]: $this->value['ru'];
    }
}

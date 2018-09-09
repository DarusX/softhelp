<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'department'
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}

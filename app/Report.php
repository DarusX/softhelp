<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
        'report', 'description', 'user_id', 'department_id', 'priority', 'statu'
        //¬¬
        //Aqui van todos los campos excepto id, created_at y updated_at
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
        return $this->belongsTo(Report::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

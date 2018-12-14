<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    protected $fillable = [
        'message', 'report_id', 'user_id', 'message_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reports()
    {
        return $this->belongsTo(Report::class);
    }
    
    public function messages()
    {
        return $this->belongsTo(Message::class);
    }
}

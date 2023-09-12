<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'corps',
        'clientId',
        ];

        public function user()
        {
            return $this->belongsTo(User::class, 'clientId');
        }
}

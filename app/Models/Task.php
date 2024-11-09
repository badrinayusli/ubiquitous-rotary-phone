<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =[ // nak bagitahu yang boleh diisi dengan db
        'title',
        'description',
        'type',
        'duedate',
        'user_id'
        ];
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id', 'id'); // nak buat relationship one to many
        }
}

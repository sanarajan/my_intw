<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    public $timestamps = ["created_at"];
    const UPDATED_AT = null;
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $table = 'designations';
    public $timestamps = ["created_at"];
    const UPDATED_AT = null;
    public function ds_users()
    {
        return $this->hasMany(User::class);
    }
}

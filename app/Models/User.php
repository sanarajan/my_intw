<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps = ["created_at"];
    const UPDATED_AT = null;  

   

    public function department()
    {
        return $this->belongsTo(Department::class,'Fk_department', 'id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class,'Fk_designation', 'id');
    }
}

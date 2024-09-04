<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_list extends Model
{
    use HasFactory;

    protected $fillable = [
        "FirstName",
        "LastName",
        "MiddleName",
        "Designation",
        "Email",
        "UserType",
    ];
        
}

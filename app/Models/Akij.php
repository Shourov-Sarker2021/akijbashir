<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akij extends Model
{
    use HasFactory;
    protected $fillable=[
        'full_name','email','mobile','address','user_name','password'
    ];
}

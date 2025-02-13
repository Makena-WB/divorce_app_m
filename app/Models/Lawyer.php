<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    
    protected $table = 'lawyers';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name','last_name','email','address','cases_won'];
}

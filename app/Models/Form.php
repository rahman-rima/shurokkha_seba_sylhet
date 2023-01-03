<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable = ['NID_no', 'names', 'birthdate', 'phoneN', 'mailaddress','sex', 'BloodG', 
    'address', 'Wardno','veksinate', 'Vname', 'priordiagnosis', 'status'];
}

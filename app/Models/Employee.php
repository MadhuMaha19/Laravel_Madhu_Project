<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $fillable=['id_format','organisation_name','organisation_address','user_name','designation','user_image','address','DOB','blood_group','phone_number','email_id','bg_image'];
    public $timestamp=false;
}

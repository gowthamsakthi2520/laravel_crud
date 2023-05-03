<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conduct extends Model
{
    use HasFactory;
    protected $table="contact_form";
    protected $fillable = ['Username','Password','Email','Number','file','name','file_path'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intersting extends Model
{

    protected $fillable = ['id','intersting'];

    protected $hidden = [	'created_at' ,'updated_at'];
}

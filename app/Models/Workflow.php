<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    protected $fillable = ['id','workflow'];
    protected $hidden = [	'created_at' ,'updated_at'];
}

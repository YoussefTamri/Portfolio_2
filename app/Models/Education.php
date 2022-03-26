<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    
    protected $fillable = ['titre','sous_titre','description','begin_date','end_date'];


    protected $hidden = [	'created_at' ,'updated_at'];
}

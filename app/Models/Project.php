<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['titre','sous_titre','photo_baground','photo','description','demo_link','github_link'];
    

    protected $hidden = [	'created_at' ,'updated_at'];

}

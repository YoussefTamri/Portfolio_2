<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['first_name','last_name','email','address','photo','description','linkdin','facebook','github','instagram','phone'];
    


    protected $hidden = [	'created_at' ,'updated_at'];
}

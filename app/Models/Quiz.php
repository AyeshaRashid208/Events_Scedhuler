<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;
    // use HasFactory;
    protected $fillable=[
      'title',
      'duration',
      'from_time',
      'to_time'
    ];

    public function question(){
        $this->hasMany(Question::class);
    }

    public function result(){
        $this->hasMany(Result::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Folder extends Model
{
    use SoftDeletes;
    protected $table = 'folders';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function getRouteKeyName(){
        return 'id';
    }
}

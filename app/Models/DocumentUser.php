<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentUser extends Model
{
    use SoftDeletes;
    protected $table = 'document_users';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function getRouteKeyName(){
        return 'id';
    }
}

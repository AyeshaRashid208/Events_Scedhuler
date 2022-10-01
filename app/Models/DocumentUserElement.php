<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentUserElement extends Model
{
    use SoftDeletes;
    protected $table = 'document_user_elements';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function getRouteKeyName(){
        return 'id';
    }
    
    public function signature()
    {
        return $this->belongsTo('App\Signature','id','d_u_elements');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SendDocument extends Model
{
    use SoftDeletes;
    protected $table = 'send_documents';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function getRouteKeyName(){
        return 'id';
    }
}

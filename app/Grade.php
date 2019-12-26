<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];

    ///eloquent relations

    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}

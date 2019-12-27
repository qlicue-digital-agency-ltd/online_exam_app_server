<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'code'];
    protected $dates = ['deleted_at'];


    //eloquent relations

    public function grade()
    {
        return $this->belongsToMany(Grade::class);
    }

    public function examinations()
    {
        return $this->hasMany(Examination::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = ['content', 'image'];
    protected $dates = ['deleted_at'];

    //eloquent relationship

    public function examinations()
    {
        return $this->belongsTo(Examination::class);
    }
    
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use SoftDeletes;

    protected $fillable = ['content', 'alphabet', 'is_correct'];
    protected $dates = ['deleted_at'];

    ///eloquent relationship
    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}

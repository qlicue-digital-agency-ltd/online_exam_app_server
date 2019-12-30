<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rank extends Model
{
    use SoftDeletes;

    protected $fillable = ['score', 'student_id', 'examination_id'];
    protected $dates = ['deleted_at'];

    ///eloquent relations

    public function examinations()
    {
        return $this->belongsTo(Examination::class);
    }
    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination extends Model
{
    use SoftDeletes;

    protected $fillable = ['exam_no', 'duration', 'opening_time', 'closing_time', 'subject_id', 'teacher_id'];
    protected $dates = ['deleted_at'];

    //eloquent relations

    public function subjects()
    {
        return $this->belongsTo(Subject::class,'subject_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'teacher_id','id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function ranks()
    {
        return $this->hasMany(Rank::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class,'grade_id','id');
    }
}

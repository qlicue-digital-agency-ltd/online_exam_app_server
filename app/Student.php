<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    use SoftDeletes;

    protected $fillable = ['name', 'grade_id', 'district_id', 'region_id', 'age', 'gender', 'school_name', 'user_id'];
    protected $dates = ['deleted_at'];

    public function ranks()
    {
        return $this->hasMany(Rank::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

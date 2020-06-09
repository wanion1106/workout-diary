<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class WorkoutRecord extends Model
{
    use SoftDeletes;

    protected $fillable = ['item', 'weight', 'rep', 'set'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SelfcheckRecord extends Model
{
    use SoftDeletes;

    protected $fillable = ['body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

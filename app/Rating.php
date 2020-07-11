<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        "spirit_id",
        "rating",
        "review",
        "user_id",
        "region",
        "country",
        "postal_code",
        "active"
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function spirit()
    {
        return $this->belongsTo('App\Spirit', 'spirit_id');
    }
}

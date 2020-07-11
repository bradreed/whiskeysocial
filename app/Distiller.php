<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Distiller extends Model
{

    use InteractsWithMedia;

    //
    protected $fillable = [
        "name",
        "description",
        "street_address",
        "locality",
        "region",
        "country",
        "postal_code",
        "active"
    ];
}

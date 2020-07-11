<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Spirit extends Model
{
	use InteractsWithMedia;
	
    protected $fillable = [
        "name",
        "abv",
        "description",
        "brand",
        "distillery",
        "region",
        "spirit_type"
    ];
}

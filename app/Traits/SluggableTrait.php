<?php
namespace App\Traits;

use App\Models\Slug;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait SluggableTrait
{
    public function sluggable() : MorphOne
    {
        return $this->morphOne(Slug::class , 'sluggable');
    }
}

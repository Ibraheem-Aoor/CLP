<?php

namespace App\Models;

use App\Traits\SluggableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory , SluggableTrait;
}

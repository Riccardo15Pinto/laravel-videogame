<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Console extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name_company', 'city', 'web_site', 'description'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name_company', 'city', 'logo', 'web_site', 'date_fondation'];

    public function videogames()
    {
        return $this->hasMany(Videogame::class);
    }
}

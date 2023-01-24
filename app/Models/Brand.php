<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function devs(): HasMany
    {
        return $this->hasMany(Dev::class);
    }

    public function sites(): HasMany
    {
        return $this->hasMany(Site::class);
    }
}

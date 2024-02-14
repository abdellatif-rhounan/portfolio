<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'link', 'img_src'];

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technologie::class);
    }
}

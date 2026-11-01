<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DeploymentUnit extends Model
{
    public function deployment(): BelongsTo
    {
        return $this->belongsTo(Deployment::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function blockers(): HasMany
    {
        return $this->hasMany(Blocker::class);
    }
}

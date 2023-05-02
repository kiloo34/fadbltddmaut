<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Villager extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'dependent',
        'job_id',
        'earnings',
        'education_id',
        'condition',
    ];

    /**
     * Get the job that owns the Villager
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    /**
     * Get the education that owns the Villager
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class, 'education_id');
    }
}

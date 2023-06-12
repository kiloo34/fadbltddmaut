<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillagerCriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'villager_id',
        'criteria_id',
        'value',
        'conversion',
        'created_by',
        'updated_by'
    ];
}

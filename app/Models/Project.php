<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource]
class Project extends Model
{
    use HasFactory;

        protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'technologies',
        'date',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
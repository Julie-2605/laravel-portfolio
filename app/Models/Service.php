<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource()]
class Service extends Model
{
    use HasFactory;
     
    protected $fillable = ['name', 'price'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SecondaryCategory;

class PrimaryCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function secondaryCategories()
    {
        return $this->hasMany(SecondaryCategory::class);
    }
}
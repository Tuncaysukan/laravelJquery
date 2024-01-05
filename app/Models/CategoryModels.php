<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApiModels;



class CategoryModels extends Model
{
    use HasFactory;
    protected $fillable=[];

    public function apiModels()
    {
        return $this->hasMany(ApiModel::class, 'category_id', 'id');
    }
}

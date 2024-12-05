<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false;
    protected $table = "category";

    protected $fillable = [
        'id', 'title', 'created_at','updated_at',
    ];
}

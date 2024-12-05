<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','desc','thumbnail','category_id','created_at','updated_at'];

    public function customer(){
        return $this->belongsTo(CategoryModel::class,'category_id','id');
    }

    public $timestamps = false;
}

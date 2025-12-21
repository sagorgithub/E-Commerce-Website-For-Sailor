<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $fillable = [
        'category_id',
        'link',
        'image',
        'title',
        'status'
    ];
    
    public function category()
    {
        return $this->hasOne(BannerCategory::class,'id','category_id')->select('id','name');
    }
}

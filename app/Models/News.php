<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
    	'title_vi',
        'title_en',
        'title_ja',
    	'image',
    	'category_id',
    	'summary_vi',
        'summary_en',
        'summary_ja',
    	'content_vi',
        'content_en',
        'content_ja',
        'view',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

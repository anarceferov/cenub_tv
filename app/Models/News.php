<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewsCategory;
use App\Models\Tag;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'content' , 'image' , 'slug' , 'view' , 'cb_news_categories_id' , 'video' , 'tarix'];

    protected $table = 'cb_news';



    
    public function category()
    {
        return $this->belongsTo(NewsCategory::class , 'cb_news_categories_id');
    }

    public function tag()
    {
        return $this->hasMany(Tag::class, 'news_id');
    }

}

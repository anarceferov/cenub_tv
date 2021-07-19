<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;
    protected $fillable = ['slug' , 'name' , 'image' , 'color'];
    protected $table = 'cb_news_categories';


    public function news(){
        return $this->hasMany(News::class,'cb_news_categories_id');
    }
}

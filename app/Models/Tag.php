<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\News;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['slug' , 'name' , 'news_id' , 'color' , 'url'];
    protected $table = 'cb_tags';

    public function tags()
    {
        return $this->belongsTo(News::class , 'news_id');
    }
}

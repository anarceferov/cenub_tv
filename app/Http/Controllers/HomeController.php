<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use App\Models\Tag;
use App\Models\News;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $tech = News::with('category', 'tag')->whereHas('category',function ($query) {
            $query->where('id', 1);
        })->orderByDesc('created_at')->take(3)->get(); // Tech xeberler
        $covid = News::with('category', 'tag')->whereHas('category', function ($query) {
            $query->where('id', 8);
        })->orderByDesc('created_at')->get();
       // $newsTechs = News::with('category' , 'tag')->where('cb_news_categories_id' , '1')->take('4')->inRandomOrder()->get();
        $randomNews = News::inRandomOrder(15)->get();
        $newNews = News::with('category', 'tag')->orderByDesc('created_at')->take(3)->get(); // en yeni xeberler
        $newNews2 = News::with('category', 'tag')->orderByDesc('created_at')->offset(3)->limit(3)->get(); // en yeni xeberler2
        $viewNews = News::with('category', 'tag')->orderByDesc('view')->take(3)->get(); // en cox baxilan xeberler
        $videoNews = News::with('category', 'tag')->whereNotNull('video')->orderByDesc('created_at')->take(1)->get(); // en cox baxilan xeberler
        $categories = NewsCategory::all();
        $banners = Banner::all();
        return view('front.index', compact('newNews', 'viewNews', 'videoNews', 'newNews2', 'categories', 'tech', 'covid', 'randomNews' , 'banners'));
    }

    public function news($slug)
    {
        $categories = NewsCategory::withCount('news')->get();
        $newNews = News::with('category', 'tag')->orderByDesc('created_at')->take(4)->get(); // en yeni xeberler
        $viewNews = News::with('category', 'tag')->orderByDesc('view')->take(3)->get(); // en cox baxilan xeberler
        $tags = Tag::all();
        $news = News::with('category', 'tag')->whereSlug($slug)->first();
        $news->increment('view');
        $banners = Banner::all();
        return view('front.news', compact('news', 'tags', 'categories', 'newNews', 'viewNews' , 'banners'));
    }

    public function category($cb_news_categories_id)
    {
        $tags = Tag::all();
        $newNews = News::with('category', 'tag')->orderByDesc('created_at')->take(4)->get(); // en yeni xeberler
        $viewNews = News::with('category', 'tag')->orderByDesc('view')->take(3)->get(); // en cox baxilan xeberler
        $categories = NewsCategory::withCount('news')->get();
        $category_news = News::with('category', 'tag')->where('cb_news_categories_id', $cb_news_categories_id)->paginate(4) ?? abort(403, 'KATEQORI TAPILMADI');
        $banners = Banner::all();
        return view('front.category', compact('categories', 'category_news', 'tags', 'newNews', 'viewNews' , 'banners'));
    }

    public function searched(Request $request)
    {
        $tags = Tag::all();
        $newNews = News::with('category', 'tag')->orderByDesc('created_at')->take(4)->get(); // en yeni xeberler
        $viewNews = News::with('category', 'tag')->orderByDesc('view')->take(3)->get(); // en cox baxilan xeberler
        $categories = NewsCategory::withCount('news')->get();
        $category_news = News::with('category', 'tag')->where('title', "like", "%" . $request->searched . "%")->paginate(10) ?? abort(403, 'KATEQORI TAPILMADI');
        $banners = Banner::all();
        return view('front.category', compact('categories', 'category_news', 'tags', 'newNews', 'viewNews' , 'banners'));
    }

    public function tag($news_id)
    {
        $tags = Tag::with('tags')->where('news_id', $news_id)->get() ?? abort(403, 'ETIKET TAPILMADI');
        $banners = Banner::all();
        return view('front.category', compact('tags' , 'banners'));
    }

    // $category = NewsCategory::whereSlug($slug)->first() ?? abort(403 , 'KATEQORI TAPILMADI');
    // $news = News::where('cb_news_categories_id' , $category->id)->orderByDesc('created_at')->paginate(10);
}

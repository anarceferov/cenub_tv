<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\Models\NewsCategory;
use App\Http\Requests\NewsCreate;
use App\Http\Requests\NewsUpdate;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{
    function __construct()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        $this->middleware('permission:news-index', ['only' => ['index']]);
        $this->middleware('permission:news-create', ['only' => ['create']]);
        $this->middleware('permission:news-store', ['only' => ['store']]);
        $this->middleware('permission:news-edit', ['only' => ['edit']]);
        $this->middleware('permission:news-update', ['only' => ['update']]);
        $this->middleware('permission:news-destroy', ['only' => ['destroy']]);
    }

    public function index()
    {
        $news = News::with('category', 'tag')->orderByDesc('id')->paginate(5);
        return view('back.news.list', compact('news'));
    }

    public function create()
    {
        $categories = NewsCategory::all();
        return view('back.news.create', compact('categories'));
    }

    public function store(NewsCreate $request)
    {
        $news = new News;
        $news->title = $request->title;
        $news->tarix = $request->tarix;
        $news->cb_news_categories_id = $request->name;
        $news->content = $request->content;
        $news->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $fileName = Str::slug($request->title) . time() . '.' . $request->image->extension();
            $fileNameWithUpload = 'uploads/news/' . $fileName;

            $request->image->move(public_path('uploads/news'), $fileName);

            $news->image = $fileNameWithUpload;
        }

        $news->save();

        foreach ($request->tags as $key => $tag) {
            // return $request->color[$key] .'<br>'. $tag;
            Tag::create([
                'news_id' => $news->id,
                'name' => $tag,
                'color' => $request->color[$key],
                'url' => $request->url
            ]);
        }


        return redirect()->route('news.index')->withSuccess('Uğurla əlacvə edildi');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $new = News::with('tag')->findOrFail($id) ?? abort(403, 'Xəbər Tapılmadı...');
        $categories = NewsCategory::all();
        return view('back.news.edit', compact('new', 'categories'));
    }

    public function update(NewsUpdate $request, $id)
    {
//        dd($request);

        $news = News::findOrFail($id) ?? abort(403, 'Xəbər Tapılmadı...');

        $news->title = $request->title;
        $news->tarix = $request->tarix;
        $news->cb_news_categories_id = $request->name;
        $news->content = $request->content;
        $news->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {

            if (File::exists($news->image)) {
                File::delete(public_path($news->image));
            }

            $fileName = Str::slug($request->title) . time() . '.' . $request->image->extension();
            $fileNameWithUpload = 'uploads/news/' . $fileName;

            $request->image->move(public_path('uploads/news'), $fileName);

            $news->image = $fileNameWithUpload;
        }

        $news->save();
        
        foreach ($request->tags as $key => $tag) {
            Tag::find($key)->update([
                'news_id' => $news->id,
                'name' => $tag,
                'color' => $request->color[$key],
                'url' => $request->url,
            ]);
        }

        return redirect()->route('news.index')->withSuccess('Xəbər yeniləndi...');
    }

    public function destroy($id)
    {
        $new = News::findOrFail($id);

        if (File::exists($new->image)) {
            File::delete(public_path($new->image));
        }

        $new->delete();
        return redirect()->back()->withSuccess('Xəbər silindi...');
    }
}

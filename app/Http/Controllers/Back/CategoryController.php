<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreate;
use App\Http\Requests\CategoryUpdate;
use App\Models\NewsCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    function __construct()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        $this->middleware('permission:category-index', ['only' => ['index']]);
        $this->middleware('permission:category-create', ['only' => ['create']]);
        $this->middleware('permission:category-store', ['only' => ['store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit']]);
        $this->middleware('permission:category-update', ['only' => ['update']]);
        $this->middleware('permission:category-destroy', ['only' => ['destroy']]);
    }

    public function index()
    {
        $categories = NewsCategory::orderByDesc('id')->paginate(5);
        return view('back.category.list' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreate $request)
    {
        $newsCategories = new NewsCategory;
        $newsCategories->name      = $request->name;
        $newsCategories->color     = $request->color;
        $newsCategories->slug      = Str::slug($request->name);

        if($request->hasFile('image')){
            $fileName = Str::slug($request->title).time().'.'.$request->image->extension();
            $fileNameWithUpload = 'uploads/category/'.$fileName;

            $request->image->move(public_path('uploads/category'),$fileName);
            $newsCategories->image = $fileNameWithUpload;
        }

        $newsCategories->save();
        return redirect()->route('categories.index')->withSuccess('Kateqori ??lav?? edildi...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = NewsCategory::find($id) ?? abort(403 , 'Kateqori Tap??lmad??...');
        return view('back.category.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdate $request, $id)
    {
        $category=NewsCategory::find($id) ?? abort(403, 'Kateqori Tap??lmad??...');

        $category->name = $request->name;
        $category->color= $request->color;
        $category->slug = Str::slug($request->name);

        if($request->hasFile('image')){

            if(File::exists($category->image)){
                File::delete(public_path($category->image));
            }

            $fileName = Str::slug($request->title).time().'.'.$request->image->extension();
            $fileNameWithUpload = 'uploads/category/'.$fileName;

            $request->image->move(public_path('uploads/category'),$fileName);
            $category->image = $fileNameWithUpload;
        }
        $category->save();
        return redirect()->route('categories.index')->withSuccess('U??urla Yenil??ndi...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = NewsCategory::findOrFail($id);
        if(File::exists($category->image)){
            File::delete(public_path($category->image));
        }
        $category->delete();
        return redirect()->back()->withSuccess('Kateqori silindi...');
    }
}

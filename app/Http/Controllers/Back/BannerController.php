<?php

namespace App\Http\Controllers\Back;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerCreate;
use App\Http\Requests\BannerUpdate;
use App\Models\Banner;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        $count = Banner::count();
        return view('back.banner.list' , compact('banners' , 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerCreate $request)
    {
        $banners = new Banner;
        $banners->link      = $request->link;
        $banners->position  = $request->position;

        if($request->hasFile('image')){
            $fileName = $request->position.'.'.$request->image->extension();
            $fileNameWithUpload = 'uploads/banner/'.$fileName;

            $request->image->move(public_path('uploads/banner'),$fileName);
            $banners->image = $fileNameWithUpload;
        }

        $banners->save();
        return redirect()->route('banners.index')->withSuccess('Reklam əlavə edildi...');
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
        $banner = Banner::find($id) ?? abort(403 , 'Reklam Tapılmadı...');
        return view('back.banner.edit' , compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerUpdate $request, $id)
    {
        $banner=Banner::find($id) ?? abort(403, 'Reklam Tapılmadı...');

        $banner->link      = $request->link;
        $banner->position  = $request->position;

        if($request->hasFile('image')){
            $fileName = $request->position.'.'.$request->image->extension();
            $fileNameWithUpload = 'uploads/banner/'.$fileName;

            $request->image->move(public_path('uploads/banner'),$fileName);
            $banner->image = $fileNameWithUpload;
        }

        $banner->save();
        return redirect()->route('banners.index')->withSuccess('Reklam Uğurla Yeniləndi...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        if(File::exists($banner->image)){
            File::delete(public_path($banner->image));
        }
        $banner->delete();
        return redirect()->back()->withSuccess('Reklam silindi...');
    }
}

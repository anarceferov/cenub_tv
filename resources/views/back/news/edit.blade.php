@extends('back.layouts.master')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger shadow border border-danger">
        <ol>
            @foreach ($errors->all() as $error)
            <li style="list-style-type: none;" class="mb-1"> <i class="fas fa-exclamation mr-1"></i> {{ $error }}
            </li>
            @endforeach
        </ol>
    </div>
    @endif
</div>

<div class="container">
    <div class="card shadow mt-5 border border-dark bg-light">
        <div class="card-header">
            <a href="{{route('news.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('news.update' , $new->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="" class="text-danger">Xəbərin Başlığı:</label>
                    <input type="text" class="form-control" name="title" placeholder="Xəbərin başlığı..."
                        value="{{$new->title}}" autofocus>
                </div>
                <hr>
                <div class="form-group">
                    <label for="" class="text-danger">Xəbərin Məzmunu:</label>
                    <textarea name="content" id="summernote" rows="20" class="form-control"
                        placeholder="Xəbərin məzmunu...">{{$new->content}}</textarea>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="text-danger">Kateqorya:</label>
                        <select name="name" class='form-control'>
                            <option value="" selected disabled>Kateqori seçin</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id}}" @if( $category->id == $new->cb_news_categories_id) selected @endif> {{ $category->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="text-danger">Tarix:</label>
                        <input type="text" name="tarix" class="form-control" placeholder="Tarix..." value="{{$new->tarix}}">
                    </div>
                </div><hr>
                <div class="form-group">
                    <label for="" class="text-danger">Video Link:</label>
                    <input type="url" name="video" class="form-control" placeholder="Video Url..." value="{{$new->video}}">
                </div><hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                       <div class="colors">
                        <label for="" class="text-danger">Etiket Rəngi:</label>
                           @foreach ($new->tag as $tags)
                               <input type="text" name="color[{{$tags->id}}]" class="form-control mt-2" placeholder="Rəng..." value="{{$tags->color}}" required>
                           @endforeach
                       </div>
                    </div>
{{--                    <div class="form-group col-md-1">--}}
{{--                        <button class="add-color btn btn-success btn-sm" onclick="event.preventDefault()"> <i class="fa fa-plus"></i></button>--}}
{{--                    </div>--}}
                    <div class="form-group col-md-6">
                        <div class="tags">
                            <label for="" class="text-danger">Etiket:</label>
                            @foreach ($new->tag as $tags)
                                <input type="text" name="tags[{{$tags->id}}]" class="form-control mt-2" placeholder="Etiket..." value="{{$tags->name}}" required>
                            @endforeach
                        </div>
                    </div>
{{--                    <div class="form-group col-md-1">--}}
{{--                        <button class="add-tag btn btn-success btn-sm" onclick="event.preventDefault()"> <i class="fa fa-plus"></i></button>--}}
{{--                    </div>--}}
                </div><hr>
                <div class="form-group">
                    <label for="" class="text-danger">Şəkil:</label>
                    <input type="file" name="image" id="">
                </div><hr>
                <div class="form-group">
                    <h2 for="" class="text-danger text-center">Hazırki Şəkil</h2>
                    <img src="{{asset($new->image)}}" style='max-width:100%' height='auto' class="img-fluid">
                </div>
                <hr>
                <button class="btn btn-success btn-block" type="submit"><i class="fas fa-retweet"></i>  Yenilə</button>
            </form>
        </div>
    </div>
</div>
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote(
    {
      'height':300,
      placeholder: 'Xəbərin məzmunu...'
    }
  );
});

// const addBtn = $('.add-tag')
// const tagDiv = $('.tags')
//     const addColorBtn = $('.add-color')
//     const colors = $('.colors')
//
//     addBtn.on('click',() => {
//         tagDiv.append('<input type="text" name="tags[]" class="form-control mt-2">')
//     })
//     addColorBtn.on('click',() => {
//         colors.append('<input type="text" name="color[]" class="form-control mt-2">')
//     })
</script>
@endsection
@endsection

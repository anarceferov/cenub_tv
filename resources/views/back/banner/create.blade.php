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
            <a href="{{route('banners.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('banners.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="text-danger">Reklam Linki:</label>
                    <input type="url" class="form-control" name="link" placeholder="Reklam Linki..."
                        value="{{old('link')}}">
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="text-danger">Mövqe seçin:</label>
                        <select class="custom-select" name="position">
                            <option value="1">Bir</option>
                            <option value="2">İki</option>
                            <option value="3">Üç</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <div>
                            <label for="" class="text-danger">Şəkil:</label>
                        </div>
                        <input type="file" name="image">
                    </div>
                </div>
                <hr>
                <button class="btn btn-success btn-block" type="submit"><i class="fa fa-plus"></i> Əlavə Et</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection
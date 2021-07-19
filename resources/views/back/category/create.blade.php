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
            <a href="{{route('categories.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="text-danger">Kateqori Adı:</label>
                    <input type="text" class="form-control" name="name" placeholder="Kateqori adı..." value="{{old('name')}}">
                </div><hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="text-danger">Kateqori Rəngi:</label>
                        <input type="text" name="color" class="form-control" placeholder="Kateqori rəngi...">
                    </div>
                    <div class="form-group col-md-6">
                        <div>
                            <label for="" class="text-danger">Şəkil:</label>
                        </div>
                        <input type="file" name="image">
                    </div>
                </div><hr>
                <button class="btn btn-success btn-block" type="submit"><i class="fa fa-plus"></i> Əlavə Et</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection

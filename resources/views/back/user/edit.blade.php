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
            <a href="{{route('users.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('users.update' , $user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{$user->id}}" name="id">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Ad Soyad..." value="{{$user->name}}">
                </div>
                <hr>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email..." value="{{$user->email}}">
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="password" name="password" class="form-control" id="" placeholder="Şifrə...">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Şifrə doğrula...">
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <h3 class="text-center  badge-danger badge-pill"> Permissions </h3>
                </div>

                <div class="form-group"> 
                    <button class="btn btn-secondary btn-sm">Select ALL</button>
                </div>

                <div class="form-check bg-light">
                    @foreach($permission as $value)
                    <input type="checkbox" value="{{$value->name}}" class="form-check-input" id="{{ $value->id }}" name="permission[]" @foreach ($userPermissions as $per) @if(($per->permission_id == $value->id)  && ($per->model_id == $user->id)) checked @endif @endforeach>
                    <label class="form-check-label" for="{{ $value->id }}" value=""> {{ $value->name }} </label>
                    <br>
                    @endforeach
                </div>
                <hr>

                <button class="btn btn-success btn-block" type="submit"><i class="fas fa-retweet"></i> Yenilə</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

<script>
    $('.btn-secondary').click(function(e) {
        e.preventDefault()
        $('.form-check-input').prop('checked', true);
    })
</script>
@endsection

@section('css')
<style>
    hr {
        border: 1px solid black;
    }
</style>
@endsection
@extends('back.layouts.master')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success shadow border border-success text-center">
        <i class="fa fa-check mr-2"></i>
        {{ session('success')}}
    </div>
    @endif
</div>

<div class="card border border-dark shadow">
    <div class="card-header bg-light mt-2">
        <a href="{{route('banners.create')}}" class="btn btn-success float-right @if($count >= 3)d-none @endif"> <i class="fas fa-plus"></i> Əlavə
            et</a>
    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" style="border: 3px solid black;">
                    <thead class="text-center border border-dark">
                        <tr class="bg-secondary text-white">
                            <th scope="col">No</th>
                            <th scope="col">Şəkil</th>
                            <th scope="col">Link</th>
                            <th scope="col">Mövqe</th>
                            <th scope="col">Yaradılıb</th>
                            <th scope="col">Yenilənib</th>
                            <th scope="col">Prosess</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($banners as $banner)
                        <tr>
                            <th class="align-middle">
                                <div class="badge badge-pill badge-dark">
                                    {{$loop->iteration}}
                                </div>
                            </th>
                            <th class="align-middle" width="220"><img src="{{ asset($banner->image)}}" alt=""
                                    style='max-width:100%' height='auto' class="img-fluid"></th>
                            <th class="align-middle"> {{ $banner->link}} </th>
                            <th class="align-middle"> {{ $banner->position}} </th>
                            <th class="align-middle" title="{{$banner->created_at}}">
                                {{ Carbon\Carbon::parse($banner->created_at)->diffForHumans()}} </th>
                            <th class="align-middle" title="{{$banner->updated_at}}">
                                {{ Carbon\Carbon::parse($banner->updated_at)->diffForHumans()}} </th>
                            <td class="align-middle">
                                <a href="{{route('banners.edit' , $banner->id)}}" class="btn btn-info d-inline btn-sm"
                                    type="button"><i class="fas fa-edit"></i></a>

                                <form action="{{route('banners.destroy' , $banner->id )}}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit"><i
                                            class="far fa-trash-alt"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    setTimeout(function(){

        $(".alert").hide("2000")

    }, 3000);
</script>
@endsection
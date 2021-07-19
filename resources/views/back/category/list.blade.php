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
        <a href="{{route('categories.create')}}" class="btn btn-success float-right"> <i class="fas fa-plus"></i> Əlavə
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
                            <th scope="col">Ad</th>
                            <th scope="col">Rəng</th>
                            <th scope="col">Yaradılıb</th>
                            <th scope="col">Yenilənib</th>
                            <th scope="col">Prosess</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($categories as $category)
                        <tr>
                            <th class="align-middle">
                                <div class="badge badge-pill badge-dark">
                                    {{ (($categories->currentPage() - 1 ) * $categories->perPage() ) + $loop->iteration }}
                                </div>
                            </th>
                            <th class="align-middle" width="220"><img src="{{ asset($category->image)}}" alt=""
                                style='max-width:100%' height='auto' class="img-fluid"></th>
                            <th class="align-middle"> {{ $category->name}} </th>
                            <th class="align-middle"><span  class="text-white badge rounded-pill" style="background-color: {{$category->color}};" disabled>Rəng - {{$category->color}}</span></th>
                            <th class="align-middle" title="{{$category->created_at}}">
                                {{ Carbon\Carbon::parse($category->created_at)->diffForHumans()}} </th>
                            <th class="align-middle" title="{{$category->updated_at}}">
                                {{ Carbon\Carbon::parse($category->updated_at)->diffForHumans()}} </th>
                            <td class="align-middle">
                                <a href="{{route('categories.edit' , $category->id)}}"
                                    class="btn btn-info d-inline btn-sm" type="button"><i class="fas fa-edit"></i></a>

{{--                                <form action="{{route('categories.destroy' , $category->id )}}" method="post"--}}
{{--                                    class="d-inline">--}}
{{--                                    @csrf--}}
{{--                                    @method('delete')--}}

{{--                                    <button class="btn btn-danger btn-sm" type="submit"><i--}}
{{--                                            class="far fa-trash-alt"></i></button>--}}
{{--                                </form>--}}

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="float-right">
                {{ $categories->withQueryString()->links()}}
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

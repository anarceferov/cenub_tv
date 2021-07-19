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

<div class="card">
    <div class="card-header bg-light mt-2">
        <a href="{{route('news.create')}}" class="btn btn-success float-right"> <i class="fas fa-plus"></i> Əlavə et</a>
    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" style="border: 3px solid black;">
                    <thead class="text-center border border-dark">
                        <tr class="bg-secondary text-white">
                            <th scope="col">No</th>
                            <th scope="col">Şəkil</th>
                            <th scope="col">Başlıq</th>
                            <th scope="col">Baxılma Sayı</th>
                            <th scope="col">Kateqori</th>
                            <th scope="col">Etiket</th>
                            <th scope="col">Yaradılma Tarixi</th>
                            <th scope="col">Yaradılma Tarixi(Əsl)</th>
                            <th scope="col">Yenileme Tarixi</th>
                            <th scope="col">Prosses</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($news as $new)
                        <tr>
                            <th class="align-middle">
                                <div class="badge badge-pill badge-dark">
                                    {{ (($news->currentPage() - 1 ) * $news->perPage() ) + $loop->iteration }}
                                </div>
                            </th>
                            <th class="align-middle" width="220"> <img src="{{asset($new->image)}}" alt="" style='max-width:100%' height='auto' class="img-fluid"> </th>
                            <th class="align-middle"> {{ Str::limit($new->title , 30)}} </th>
                            <th class="align-middle"> {{ $new->view}} </th>
                            <th class="align-middle"> {{ $new->category->name}} </th>

                            <th class="align-middle">
                            @foreach ($new->tag as $tags)
                                #{{ str::limit($tags->name , 20)}}
                            @endforeach
                            </th>

                            <th class="align-middle" title="{{$new->created_date}}"> {{ $new->created_date }} </th>
                            <th class="align-middle" title="{{$new->created_at}}"> {{ Carbon\Carbon::parse($new->created_at)->diffForHumans()}} </th>
                            <th class="align-middle" title="{{$new->updated_at}}"> {{ Carbon\Carbon::parse($new->updated_at)->diffForHumans()}} </th>
                            <td class="align-middle">
                                <a href="{{route('news.edit' , $new->id)}}" class="btn btn-info d-inline btn-sm"
                                    type="button"><i class="fas fa-edit"></i></a>

                                <form action="{{route('news.destroy' , $new->id )}}" method="post"
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
            <div class="float-right">
                {{ $news->withQueryString()->links()}}
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

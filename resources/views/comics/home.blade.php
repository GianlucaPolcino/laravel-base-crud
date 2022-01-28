@extends('layouts.main')

@section('content')
<h1 class="text-center pt-5">
    Pagina comics
</h1>

<div class="row py-5">
    @foreach ($comics as $comic)
    <div class="col">
        <img class="w-100" src="{{$comic->thumb}}" alt="">
        <h4 class="text-center py-3">
            {{$comic->title}}
        </h4>
        
        <div class="text-center">
            <a href="{{route('comics.show', $comic)}}" class="btn btn-success">Vedi</a>
        </div>
        
    </div>
    
    @endforeach
</div>

<div class="d-flex justify-content-center">
    {{$comics->links('pagination::bootstrap-4')}}
</div>
@endsection

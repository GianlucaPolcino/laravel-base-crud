@extends('layouts.main')

@section('content')
<h1>
    Pagina comics
</h1>

@foreach ($comics as $comic)
<img src="{{$comic->thumb}}" alt="">    
@endforeach
@endsection

@extends('layouts.main')

@section('content')
<div class="row py-5">
    <div class="col">
        <img class="w-50" src="{{$comic->thumb}}" alt="">
    </div>

    <div class="col">
        <h1>
            {{$comic->title}}
        </h1>

        <p class="py-3">
            {{$comic->description}}
        </p>
    </div>
</div>
@endsection
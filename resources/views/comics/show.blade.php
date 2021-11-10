@extends('layout.base')

@section('pageContent')
<h1 class="mb-3">{{$comic['title']}}</h1>
<img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="mb-3">
<p class="mb-3">{!!$comic['description']!!}</p>
<p class="mb-3">Price: {{$comic['price']}}$</p>
<p class="mb-3">Series: {{$comic['series']}}</p>
<p class="mb-3">Sale date: {{$comic['sale_date']}}</p>
<p class="mb-3">Type: {{$comic['type']}}</p>
@endsection
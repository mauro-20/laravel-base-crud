@extends('layout.base')

@section('pageContent')
<h1>Comics list</h1>
<table class="table mt-3">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Title</th>
    <th scope="col">Description</th>
    <th scope="col">Thumb</th>
    <th scope="col">Price</th>
    <th scope="col">Series</th>
    <th scope="col">Sale date</th>
    <th scope="col">Type</th>
    <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic)
    <tr>
    <th scope="row">{{$comic["id"]}}</th>
    <td>{{$comic["title"]}}</td>
    <td>{{Str::substr($comic["description"], 0, 50,) . ' ...'}}</td>
    <td>{{Str::substr($comic["thumb"], 0, 20,) . ' ...'}}</td>
    <td>{{$comic["price"]}}</td>
    <td>{{$comic["series"]}}</td>
    <td>{{$comic["sale_date"]}}</td>
    <td>{{$comic["type"]}}</td>
    <td><a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
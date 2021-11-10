@extends('layout.base')

@section('pageContent')
<h1>Comics list</h1>
<table class="table mt-3">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col" style="width: 10%">Title</th>
    <th scope="col" style="width: 30%">Description</th>
    <th scope="col" style="width: 20%">Thumb</th>
    <th scope="col" style="width: 5%">Price</th>
    <th scope="col" style="width: 10%">Series</th>
    <th scope="col" style="width: 10%">Sale date</th>
    <th scope="col" style="width: 10%">Type</th>
    <th scope="col" style="width: 5%">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic)
    <tr>
    <th scope="row">{{$comic["id"]}}</th>
    <td style="width: 10%">{{$comic["title"]}}</td>
    <td style="width: 30%">{{$comic["description"]}}</td>
    <td style="width: 20%">{{$comic["thumb"]}}</td>
    <td style="width: 5%">{{$comic["price"]}}</td>
    <td style="width: 10%">{{$comic["series"]}}</td>
    <td style="width: 10%">{{$comic["sale_date"]}}</td>
    <td style="width: 10%">{{$comic["type"]}}</td>
    <td style="width: 5%"><a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
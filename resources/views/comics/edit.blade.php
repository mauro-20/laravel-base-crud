@extends('layout.base')

@section('pageContent')
  <h1>Modify Comic: {{$comic['title']}}</h1>

	<form action="{{route("comics.update", $comic['id'])}}" method="POST" class="mb-3">
		@csrf
		@method('PUT')

		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Insert title" value="{{$comic['title']}}">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description" placeholder="Insert description" rows="3">{{$comic['description']}}</textarea>
		</div>

		<div class="form-group">
			<label for="thumb">URL Image Thumb</label>
			<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert URL Image" value="{{$comic['thumb']}}">
		</div>

		<div class="form-group">
			<label for="price">Price</label>
			<input type="number" class="form-control" id="price" name="price" min="0" step="0.01" placeholder="Insert price" value="{{$comic['price']}}">
		</div>

		<div class="form-group">
			<label for="series">Series</label>
			<input type="text" class="form-control" id="series" name="series" placeholder="Insert Series" value="{{$comic['series']}}">
		</div>

		<div class="form-group">
			<label for="sale_date">Sale date</label>
			<input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic['sale_date']}}">
		</div>

		<div class="form-group">
			<label for="type">Comic type</label>
			<input type="text" class="form-control" id="type" name="type" placeholder="Insert comic type" value="{{$comic['type']}}">
		</div>

		<button type="submit" class="btn btn-primary">Save</button>
	</form>
@endsection
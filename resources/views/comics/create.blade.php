@extends('layout.base')

@section('pageContent')
    <h1>Insert a new Comic</h1>

<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insert title">
	</div>

  <div class="form-group">
		<label for="description">Description</label>
		<textarea class="form-control" id="description" name="description" placeholder="Insert description" rows="3"></textarea>
	</div>

	<div class="form-group">
		<label for="thumb">URL Image Thumb</label>
		<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert URL Image">
	</div>

	<div class="form-group">
		<label for="price">Price</label>
		<input type="number" class="form-control" id="price" name="price" min="0" step="0.01" placeholder="Insert price">
	</div>

	<div class="form-group">
		<label for="series">Series</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insert Series">
	</div>

	<div class="form-group">
		<label for="sale_date">Sale date</label>
		<input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale date">
	</div>

	<div class="form-group">
		<label for="type">Comic type</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insert comic type">
	</div>

  <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection
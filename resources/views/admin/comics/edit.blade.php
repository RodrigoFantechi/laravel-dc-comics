@extends('layout.app')

@section('content')


<div class="container mb-5">
@include('partials.validation')
    <h1 class="py-5">Update comic: {{$comic->title}}</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title <strong class="text-danger">*</strong></label>
            <input type="text" name="title" id="title" class="form-control" placeholder="add title" aria-describedby="titleHlper" value="{{old('title', $comic->title)}}">
            <small id="titleHlper" class="text-muted">Add the comic title here</small>
            
        </div>

        <div class="mb-3 d-flex">
            <div class="img-preview py-3">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="control align-self-center p-3 w-100">
            <label for="thumb" class="form-label">Comic Image <strong class="text-danger">*</strong></label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="add url" aria-describedby="thumbHlper" value="{{old('thumb', $comic->thumb)}}">
            <small id="thumbHlper" class="text-muted">Add the thumb here</small>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description <strong class="text-danger">*</strong></label>
            <textarea class="form-control" name="description" id="description" rows="4">{{ old('description', $comic->description,)}}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price <strong class="text-danger">*</strong></label>
            <input type="text" name="price" id="price" class="form-control" placeholder="add price" aria-describedby="priceHlper" value="{{old('price', $comic->price)}}">
            <small id="priceHlper" class="text-muted">Add the comic price here</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="add series" aria-describedby="seriesHlper" value="{{old('series', $comic->series)}}">
            <small id="seriesHlper" class="text-muted">Add the comic series here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="add sale_date" aria-describedby="sale_dateHlper" value="{{old('sale_date', $comic->sale_date)}}">
            <small id="sale_dateHlper" class="text-muted">Add the comic sale date here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="add type" aria-describedby="typeHlper" value="{{old('type', $comic->type)}}">
            <small id="typeHlper" class="text-muted">Add the comic type here</small>
        </div>

        <button type="submit" class="btn btn-primary">Modify</button>

    </form>
</div>

@endsection
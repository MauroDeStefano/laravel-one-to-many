@extends('layouts.app');

@section('content')

<div class="container">
  <h1>Modifica il post</h1>

  <form action="{{route('admin.posts.update', $post)}}" method="POST">
  
    @csrf

     @method('PUT')
    <div class="form-group">
      <label for="title">Titolo del Post</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{$post->title}}">
      @error('title')
      <p class="form_errors text-danger">
          {{ $message }}
      </p>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">Contenuto del Post</label>
      <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{$post->content}}</textarea>
    </div>
    @error('content')
    <p class="form_errors text-danger">
        {{ $message }}
    </p>
    @enderror
    <label for="selectCategory">Categoria</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Nessuna</option>
      @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach

    </select>
    <button type="submit" class="btn btn-primary">Modifica</button>
    <button type="reset" class="btn btn-secondary" >Reset</button>
  </form>

</div>


@endsection
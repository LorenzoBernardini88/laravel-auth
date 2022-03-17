@extends('layouts.app')

@section('content')
<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="post_author">Author</label>
        <input type="text" class="form-control" name="post_author" placeholder="...">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="...">
    </div>
    <div class="form-group">
        <label class="d-block" for="content">Content</label>
        <textarea name="content" cols="80" rows="" placeholder="..."></textarea>
    </div>
    <div class="form-group col-md-2">
        <label for="post_date">Date</label>
        <input type="date" class="form-control" name="post_date">
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
</form>
@endsection
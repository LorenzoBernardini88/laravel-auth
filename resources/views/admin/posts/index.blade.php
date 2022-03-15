@extends('layouts.dashboard')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Author</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col">Published</th>
            <th scope="col">Slug</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_post as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->post_author}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->post_date}}</td>
            <td>{{$post->published}}</td>
            <td>{{$post->slug}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
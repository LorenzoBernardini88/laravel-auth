@extends('layouts.app')


@section('content')

<h1>blog content</h1>
<a href="{{route("admin.posts.create")}}"><button type="button" class="btn btn-success">New Post</button></a>

<table class="table ms_table table-borderless">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Author</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col">Published</th>
            <th scope="col">actions</th>
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
            <td>
                <a href="{{route("admin.posts.show", $post->id)}}"><button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button></a>
                <a href="{{route("admin.posts.edit", $post->id)}}"><button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a>
                <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-x-circle"></i></button>
                    {{-- onclick="return confirm('Conferma cancellazione dato ?')" --}}
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">

    @include('posts._messages')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-10">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of .row -->

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th></th>
                </thead>

                <tbody>

                    @foreach ($posts as $post)

                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr(strip_tags($post->content), 0, 50) }}{{ strlen(strip_tags($post->content)) > 50 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn 
                                btn-default btn-sm">View</a> 
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
                                <form method="POST" action="{{ route ('posts.destroy', $post->id) }}">
                                        {{ method_field('DELETE') }}

                                        {{ csrf_field() }}

                                        <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button></td>
                                </form>
                        </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
        </div>
    </div>
    </div>

</div>
@endsection

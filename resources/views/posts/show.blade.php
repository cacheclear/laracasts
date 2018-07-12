@extends('layouts.master')

@section('content')

    @if(count($post->tags))
        <ul>
            @foreach($post->tags as $tag)
                <li>
                    <a href="/posts/tags/{{$tag->name}}">
                        {{$tag->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    @include('posts.post')

    <hr>

    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>{{$comment->created_at->diffForHumans()}}:&nbsp;</strong>
                    {{$comment->body}}
                </li>
            @endforeach
        </ul>
    </div>

    <hr>

    <div class="card">
        <div class="card-block">
            <form method="post" action="/posts/{{$post->id}}/comments">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea
                        name="body"
                        id="new-comment"
                        class="form-control"
                        cols="30"
                        rows="10"
                        placeholder="Your comment here."
                    >
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>
        </div>
    </div>

    <hr>

    @include('layouts.errors')
@endsection

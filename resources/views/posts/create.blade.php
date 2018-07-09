@extends('layouts.master')

@section('content')

    <h1>Publish a post</h1>

    <hr>

    <form method="post" action="/posts ">
        {{ csrf_field()  }}
        <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" id="title" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="body">Password</label>
            <textarea name="body" class="form-control" id="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Plublish</button>
    </form>

@endsection


<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
    </h2>
    <p class="blog-post-meta">
        {{$post->created_at->toFormattedDateString()}}<br>
        created by {{$post->user->name}}
    </p>
    <p>{{$post->body}}</p>
</div><!-- /.blog-post -->


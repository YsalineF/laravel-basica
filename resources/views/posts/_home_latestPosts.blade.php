{{--
  Variables disponibles:
    - $posts : ARRAY(Post)
 --}}
<div class="col-sm-6 featured-news">
  <h2>Latest Blog Posts</h2>
  @foreach($posts as $post)
    <div class="row">
      <div class="col-xs-4"><a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}"><img src="{{ asset('assets/img/blog/' . $post->image)}}" alt="{{$post->title}}"></a></div>
      <div class="col-xs-8">
        <div class="caption"><a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">{{$post->title}}</a></div>
        <div class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</div>
        <div class="intro">{{ Str::words($post->content, 25, '...') }}<a href="blog-post.html">Read more...</a></div>
      </div>
    </div>
  @endforeach
</div>

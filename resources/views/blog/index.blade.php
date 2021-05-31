@extends('shared.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="quote">The beautiful Laravel</p>
            </div>
        </div>
        @foreach($posts as $post)
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-title">
                        <h1 class="post-title">{{$post->title}}</h1>
                        </div>
                        <div class="card-body">
                            <p style="font-weight: bold">
                                @foreach ( $post->tags as $tag)
                                    - {{$tag->name}} -
                                @endforeach
                            </p>
                            <p>{{$post->content}}</p>
                            <p><a href="{{route('blog.post',['id'=>$post->id])}}">Read more...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-12 text-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection

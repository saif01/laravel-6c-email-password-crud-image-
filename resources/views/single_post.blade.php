@extends('welcome')
@section('content')

<div class="post-preview">
                
                  <h2 class="post-title">
                    {{( $post->title )}}
                   <img src="{{ URL::to($post->image) }}" style="width:100%; height:500px;">
                  </h2>

                   <h6> {{($post->details)}} </h6>               
                <p class="post-meta">Posted by
                  <a href="#">{{($post->author)}}</a>
                  on September 18, 2018</p>
              </div>


@endsection
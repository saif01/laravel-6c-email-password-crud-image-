@extends('welcome')
@section('content')
            @php
            $post=DB::table('newss')->OrderBy('id','DESC')->get();
            @endphp
            @foreach($post as $row)
              <div class="post-preview">
                <a href="{{URL::to('view-post/'.$row->id)}}">
                  <h2 class="post-title">
                    {{( $row->title )}}
                    <img src="{{ URL::to($row->image) }}" style="width:100%; height:300px;">
                  </h2>

                   <h6> {{($row->details)}} </h6>

                </a>
                <p class="post-meta">Posted by
                  <a href="#">{{($row->author)}}</a>
                  on September 18, 2018</p>
              </div>
              <hr>
            @endforeach
@endsection
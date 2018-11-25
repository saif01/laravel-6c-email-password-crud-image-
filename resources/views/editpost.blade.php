@extends('layouts.app')
@section('content')

<div class="container">
	<!-- Form validation Message show -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

	<form action="{{url('update-post/'.$post->id)}}" method="POST">
        @csrf


    <div class="form-group">
    <label >Title</label>
    <input type="text" name="title" class="form-control" value="{{$post->title}}">
    </div>


  <div class="form-group">
    <label >Author</label>
    <input type="text" name="author" class="form-control" value="{{$post->author}}">
    
  </div>
  <div class="form-group">
    <label >Tags</label>
    <input type="text" name="tag" class="form-control"  value="{{$post->tag}}">
    </div>
    <div class="form-group">
    <label > Description</label>
    <textarea type="text" name="description" rows="4" class="form-control">{{$post->description}}</textarea>
    
    </div>


   
      <div class="modal-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>
	

</div>


@endsection
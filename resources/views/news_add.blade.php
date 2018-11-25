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

                    <a href="{{route('all.news')}}" class="btn btn-info" > All News</a>

	<form action="{{url('insert-news')}}" method="POST" enctype="multipart/form-data">
        @csrf


    <div class="form-group">
    <label >Title</label>
    <input type="text" name="title" class="form-control" >
    </div>


  <div class="form-group">
    <label >Author</label>
    <input type="text" name="author" class="form-control">
    
  </div>
  <div class="form-group">
    <label >Image</label>
    <input type="file" name="image">
    </div>
    <div class="form-group">
    <label > Details</label>
    <textarea type="text" name="details" rows="4" class="form-control"></textarea>
    
    </div>


   
      <div class="modal-footer">
       
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>
	

</div>


@endsection
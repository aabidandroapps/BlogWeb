@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/home') }}" title="" style="text-decoration: none;">Home / </a>
                    Update Blogs
                    
                </div>


                <div class="card-body">
                    @if(session('info'))
                    <div class="alert alert-success">
                      {{ session('info') }}
                    </div>
                        
                      @endif
                    <form action="{{ url('/Blog/Update', array($blog[0]->id)) }}" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $blog[0]->title }}" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea name="description" class="form-control" required="">{{ $blog[0]->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="blog_img" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input type="file" id="blog_img"  class="form-control" name="blog_img">
                            </div>
                        </div>

                        <div class="form-group row" >
                            <img id="blog_img1" src="{{url('/assets/images/blogs/')}}/{{$blog[0]->image}}" alt="your image" />
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Update Blog
                                </button>
                                <a href="{{ url('/Blog/View') }}" class="btn btn-primary" >
                                    Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style type="text/css">
    img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
  width: 300px;
  height: 200px;
}
</style>


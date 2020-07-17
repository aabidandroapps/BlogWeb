@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/home') }}" title="" style="text-decoration: none;">Home / </a>
                    Add Blogs
                    
                </div>


                <div class="card-body">
                    @if(session('info'))
                    <div class="alert alert-success">
                      {{ session('info') }}
                    </div>
                        
                      @endif
                    <form method="POST" action="{{ url('/Blog/Store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea name="description" class="form-control" required=""></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="blog_img" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input id="blog_img" type="file" class="form-control" name="blog_img" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Add Blog
                                </button>
                                <a href="{{ url('/home') }}" class="btn btn-primary" >
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container-fluid">
                        <div class="row">
                            <div>
                                <a href="{{ url('/Blog/View') }}" title="" class="btn btn-primary">View All Blog</a>   
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div>
                                <a href="{{ url('/Blog/Add') }}" title="" class="btn btn-success">Add Blog</a>   
                            </div>
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/home') }}" title="" style="text-decoration: none;">Home / </a>
                    Blogs
                    <a href="{{ url('/Blog/Add') }}" class="btn btn-primary" style="text-decoration: none; float: right;">Add Blog </a>
                    
                </div>


                <div class="card-body">
                    @if (session('info'))
                        <div class="alert alert-success" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif

                    <div class="container">
                          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sr</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Added date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @if(isset($data))
                    <?php $sr = 1;?>
                    @foreach($data->all() as $value)
                        <td>{{ $sr++ }}</td>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->description }}</td>
                        <td>
                            <div>
                                <img style="width: 150px;height: 100px;" src="{{url('/assets/images/blogs/')}}/{{$value->image}}">
                                  </div>
                        </td>
                        <td>{{ date("j F, Y", strtotime($value->created_at)) }}</td>
                        <td>
                            <a href="{{ url('/Blog/Edit') }}/{{ base64_encode($value->id) }}" title="" class="btn btn-info"><i class="fa fa-edit"></i></i></a>
                            &nbsp;
                            <a href="{{ url('/Blog/Delete') }}/{{ base64_encode($value->id) }}" title="" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    @endforeach
                @endif
                
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Sr</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Added date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
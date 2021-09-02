

@extends('wholesale.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('wholesale.create') }}"> Wholesale Application</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Title</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($wholesale as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->firstname }}</td>
            <td>{{ $product->lastname }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->phone }}</td>
            <td>
            
            <td>
                <form action="{{ route('wholesale.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('wholesale.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('wholesale.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $wholesale->links() !!}
      
@endsection
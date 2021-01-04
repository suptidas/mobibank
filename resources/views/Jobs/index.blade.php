@extends('jobs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              </br>  <h2>Add New Job</h2>
            </div>
            <div class="pull-right"></br>
                <a class="btn btn-success" href="{{ route('jobs.create') }}"> Create New Job</a>
            </div>
        </div>
    </div>
    </br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Salary</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jobs as $job)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $job->name }}</td>
            <td>{{ $job->detail }}</td>
            <td>{{ $job->salary }}</td>
            <td>
                <form action="{{ route('jobs.destroy',$job->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jobs.show',$job->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('jobs.edit',$job->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $jobs->links() !!}
   <hr></br><i><u><h2> <a href="live_search">Search Customer</a></h2></u></i></br>
   <hr></br><i><u><h2> <a href="dynamic_pdf">Customer details download</a></h2></u></i></br><hr>
   <input type="button" value="Go back!" onclick="history.back()">
@endsection
@extends('employees.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </br> <h2>Employee Dashboard Explored!</h2></br>
            </div>
            <div class="pull-right">
            </br> <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New Employee</a>
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
            <th>Name</th>
            <th>Passwords</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->password }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employees->links() !!}

    <a  class="btn btn-primary" href="{{ route('logout.index') }}">Logout</a>
    <i><u><h2> <a class="btn btn-info" href="live_search">Search Customer</a></h2></u></i>
    <i><u><h2> <a class="btn btn-success" href="dynamic_pdf">Customer details download</a></h2></u></i>
    <i><u><h2> <a class="btn btn-primary" href="jobs">Add New Job</a></h2></u></i>
    <i><u><h2> <a class="btn btn-info" href="accounts">Add New Account</a></h2></u></i>
    <i><u><h2> <a class="btn btn-success" href="account_pdf">Account Details Download</a></h2></u></i>
    <i><u><h2> <a class="btn btn-primary" href="file-upload">Upload Files(csv,pdf,xlx)</a></h2></u></i>
    <i><u><h2> <a class="btn btn-info" href="ajaxImageUpload">Image Upload</a></h2></u></i>
    <i><u><h2> <a class="btn btn-success" href="change-password">change-password</a></h2></u></i>
      
@endsection



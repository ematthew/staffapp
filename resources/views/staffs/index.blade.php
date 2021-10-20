@extends('staffs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee Staff Management Portal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('staffs.create') }}"> Create New Product</a>
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
            <th>Staff Number</th>
            <th>First Name</th>
            <th>Second Number</th>
            <th>Age</th>
            <th>Date Of Birth</th>
            <th>Date Of Employemt</th>
            <th>Speciality</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($staffs as $staff)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $staff->staffNumber }}</td>
            <td>{{ $staff->firstName }}</td>
            <td>{{ $staff->secondName }}</td>
            <td>{{ $staff->age }}</td>
            <td>{{ $staff->datebirth }}</td>
            <td>{{ $staff->dateEmployment }}</td>
            <td>{{ $staff->speciality }}</td>
            <td>
                <form action="{{ route('staffs.destroy',$staff->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('staffs.show',$staff->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('staffs.edit',$staff->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $staffs->links() !!}
      
@endsection
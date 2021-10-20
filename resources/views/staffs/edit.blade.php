@extends('staffs.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Staff</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('staffs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('staffs.update',$staff->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="form-group">
                    <label>Staff number</label>
                    <input name="staffNumber" type="text" class="form-control" placeholder="Enter your Staff number here" value="$staff->staffNumber">
                  </div>
                   
                   <div class="form-group">
                    <label>First Name</label>
                    <input name="firstName" type="text" class="form-control" placeholder="Enter First Name here" value="$staff->firstname">
                  </div>

                  <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondName" type="text" class="form-control" placeholder="Enter Second Name here" value="$staff->secondName">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control" placeholder="Enter Age here" value="$staff->age">
                  </div>

                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input name="datebirth" type="text" class="form-control" placeholder="Enter date of birth here" value="$staff->datebirth">
                  </div>

                  <div class="form-group">
                    <label>Date of Employment</label>
                    <input name="dateEmployment" type="text" class="form-control" placeholder="Enter Date of Employment here" value="$staff->dateEmployment">
                  </div>

                  <div class="form-group">
                    <label>Speciality</label>
                    <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality field of study here" value="staff->speciality">
                  </div>
                  <br>

                  <input type="submit" class="btn btn-info" value="Update">
                  <input type="submit" class="btn btn-warning" value="Reset">
   
    </form>
@endsection
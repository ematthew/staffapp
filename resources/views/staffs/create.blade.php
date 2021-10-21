@extends('staffs.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-center">Add New Staff</h2>
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



   <div class="col-10">
        <div class="card">
            <div class="card-body">

                <div class="card mb-3">
                      <img src="https://www.ei-ie.org/img/Future-of-work-in-education.jpg?p=card" class="card-img-top" alt="..." class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Add information to management database</h5>
                        <p class="card-text">kindly use this place to add all Staff Record.</p>

                        <form action="{{route('staffs.store')}}" method="post">
                @csrf
                  <div class="form-group">
                    <label>Staff number</label>
                    <input name="staffNumber" type="text" class="form-control" placeholder="Enter your Staff number here">
                  </div>
                   
                   <div class="form-group">
                    <label>First Name</label>
                    <input name="firstName" type="text" class="form-control" placeholder="Enter First Name here">
                  </div>

                  <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondName" type="text" class="form-control" placeholder="Enter Second Name here">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control" placeholder="Enter Age here">
                  </div>

                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input name="datebirth" type="text" class="form-control" placeholder="Enter date of birth here">
                  </div>

                  <div class="form-group">
                    <label>Date of Employment</label>
                    <input name="dateEmployment" type="text" class="form-control" placeholder="Enter Date of Employment here">
                  </div>

                  <div class="form-group">
                    <label>Speciality</label>
                    <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality field of study here">
                  </div>
                  <br>

                  <input type="submit" class="btn btn-info" value="Save">
                  <input type="submit" class="btn btn-warning" value="Reset">
              </form>     
                        
                    </div>
                </div>           
            </div>
        </div>
   </div>


@endsection
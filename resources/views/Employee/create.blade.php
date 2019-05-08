@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('employee.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="Employees_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" name="Employees_address" class="form-control" id="exampleInputPassword1" placeholder="Employees address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email Address</label>
                            <input type="email" name="Employees_Email_address" class="form-control" id="exampleInputPassword1" placeholder="Employees address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contact No.</label>
                            <input type="text" name="Employees_contact_no" class="form-control" id="exampleInputPassword1" placeholder="Employees Contact Number">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

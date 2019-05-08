@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Employee's List
                    <a class="btn btn-primary" href="{{route('employee.create')}}">Register Employee</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('layouts.modal')
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Employees Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->Employees_name}}</td>
                                <td>{{$data->Employees_address}}</td>
                                <td>{{$data->Employees_Email_address}}</td>
                                <td>{{$data->Employees_contact_no}}</td>
                                <td>
                                    <button type="button" onclick="window.location='{{ route("employee.edit",$data->id) }}';" class="btn btn-primary">Edit</button>
                                    <a class="btn btn-danger remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{{ route('employee.destroy', $data->id) }}" data-id="{{ $data->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

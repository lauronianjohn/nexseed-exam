@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Department's List
                    <a class="btn btn-primary" href="{{route('department.create')}}">Register Department</a>
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
                            <th scope="col">Department Name</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->department_name}}</td>
                                <td>
                                    <button type="button" onclick="window.location='{{ route("department.edit",$data->id) }}';" class="btn btn-primary">Edit</button>
                                    <a class="btn btn-danger remove-record" data-toggle="modal" data-target="#custom-width-modal" data-url="{{ route('department.destroy', $data->id) }}" data-id="{{ $data->id}}">Delete</a>
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

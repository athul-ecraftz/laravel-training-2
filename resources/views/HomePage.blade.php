@extends('layout.master')
@section('content')
    <div class="row">

        <div class="col-md-12">
            @if (session()->has('message'))
                <span class="alert alert-success mt-2 mb-2">
                    {{ session()->get('message') }}
                </span>
            @endif
        </div>
        <div class="col-md-6">
            <h1>
                List Of Users
            </h1>
        </div>
        <div class="col-md-6 text-end">
            <a class="btn btn-success " href="{{ route('createUser') }}">Create User</a>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone </th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td> <span class=" {{ $user->status == 1 ? 'text-success' : 'text-danger' }} ">
                                    {{ $user->statusText }}</span> </td>
                            <td> <a class="btn btn-primary"
                                    href="{{ route('editUser', ['uid' => encrypt($user->id)]) }}">Edit</a> <a
                                    class="btn btn-danger"
                                    href="{{ route('deleteUser', ['uid' => encrypt($user->id)]) }}">Delete</a> </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection

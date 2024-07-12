@extends('layout.master')
@section('content')
    <h1>
        Create User
    </h1>

    <div class="contact-form">

        <form action="{{ route('saveUser') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" required class="form-control" id="" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="number" name="phone" class="form-control" id="" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" required class="form-control" id="" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" id="" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="">DOB</label>
                <input type="date" name="dob" class="form-control" id="" placeholder="DOB">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select class="form-select" name="status" id="">
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
                </select>
            </div>
            <p>

            </p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection

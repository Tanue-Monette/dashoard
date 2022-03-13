@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add a Teacher</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/add-teacher" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter phone number">
            </div>
            <div class="form-group">
                <label for="name">Town:</label>
                <input type="text" class="form-control" name="town" id="exampleInputEmail1" placeholder="Enter town">
            </div>
            <div class="form-group">
                <label for="name">Address:</label>
                <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="name">Matricle:</label>
                <input type="text" class="form-control" name="teachMatricle" id="exampleInputEmail1" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save User</button>
        </div>
    </form>
</div>

@endsection

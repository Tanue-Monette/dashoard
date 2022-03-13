@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="card card-primary col-10">
        <div class="card-header">
            <h3 class="card-title">Add a Class</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/add-classes" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Class Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter class name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Start time</label>
                    <input type="time" class="form-control" name="startTime" id="exampleInputEmail1" placeholder="Enter class start time">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">End Time</label>
                    <input type="time" class="form-control" name="endTime" id="exampleInputEmail1" placeholder="Enter class end time">
                </div>
                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
            </div>
            <!-- /.card-body -->
    
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Class</button>
            </div>
        </form>
    </div>
    <div class="col-10">
    </div>
</div>
@endsection
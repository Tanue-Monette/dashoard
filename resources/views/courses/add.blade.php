@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/add-course" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text" name="courseName" class="form-control" id="exampleInputEmail1" placeholder="Enter course name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Start Time</label>
                <input type="time" class="form-control" name="startTime" id="exampleInputPassword1" placeholder="Enter course starting timee">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">End Time</label>
                <input type="time" class="form-control" name="endTime" id="exampleInputPassword1" placeholder="Enter course ending timee">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Course Content</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="content" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <select class="form-select form-control" aria-label="Default select example">
                <option selected>Asign a Teacher</option>
                {{-- @foreach ($teachers as $teacher )

                    <option value="{{ $teacher->name }}">One</option>
                    
                @endforeach --}}
            </select>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Course</button>
        </div>
    </form>
</div>

@endsection

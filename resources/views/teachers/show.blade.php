@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Teachers</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Town</th>
                                <th>Email</th>
                                <th>Matricle</th>
                                <th>Actions</th>
                            </tr>
                        </thead>  
                        <?php $i=1; ?>
                        @foreach ($teachers as $teacher )
                    
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->teachMatricle }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->town }}</td>
                                <td>{{ $teacher->email }}</td>
                                {{-- <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger">55%</span></td> --}}
                            </tr>
                        </tbody>
                        <?php ++$i; ?>
                        @endforeach

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Students</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Name</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Create Date</th>
                                <th>update Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>  
                        <?php $i=1; ?>
                        @foreach ($students as $student )
                    
                        <tbody>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $classe->name }}</td>
                                <td>{{ $classe->startTime }}</td>
                                <td>{{ $classe->endTime }}</td>
                                <td>{{ $classe->created_at->difFromHuman() }}</td>
                                <td>{{ $classe->updated_at }}</td>
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

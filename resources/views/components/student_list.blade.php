@extends('app')
@push('title')
    Student List | EDULanka
@endpush
@push('dash_title')
    Student List
@endpush

@section('content')
    <div class="container mt-4">
        <div class="row ">
            <div class="col-12">
                <h1 class="mb-3"></h1>
            </div>
            <div class="col-7">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Reg_no</th>
                        <th scope="col">Name</th>
                        <th scope="col">BOD</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->reg_no}}</td>

                            <td>{{$student->name}}</td>
                            <td>{{$student->bod}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <a href="{{route('student.stu_update',$student->id)}}" class="btn btn-warning btn-sm">Update</a>
                                <a href="{{route('student.delete',$student->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-6">

            </div>
        </div>
    </div>
@endsection

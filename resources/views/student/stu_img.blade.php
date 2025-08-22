@extends('app')
@push('title')
    Student View | EDULanka
@endpush
@push('dash_title')
    Student View
@endpush

@section('content')
    <div class="row">
        <div class="card card-primary card-outline cal-12">
            <div class="row m-3">
                <table id="students-table" class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Bod</th>
                        <th scope="col">Logo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->bod }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $student->img) }}" class="card-img-top img-size-64" alt="profile_image">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <!--end::Quick Example-->

@endsection

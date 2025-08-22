@extends('app')
@push('title')
    Register Update | EDULanka
@endpush
@push('dash_title')
    Register Update
@endpush

@section('content')
    <div class="card card-warning card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header"><div class="card-title">Register Student</div></div>
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{route('student.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Body-->
            <input type="hidden" name="id" value="{{$student->id}}">
            <div class="card-body">
                <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Student Register No</label>
                    <input
                        type="text"

                        name="reg_no"
                        class="form-control"
                        value="{{$student->reg_no}}"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                    />

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Full Name</label>
                    <input type="text" name="name" value="{{$student->name}}"  class="form-control" id="exampleInputPassword1" />
                </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" name="email" value="{{$student->email}}"  class="form-control" id="exampleInputPassword1" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" name="address" value="{{$student->address}}"  class="form-control" id="exampleInputPassword1" />
                    </div>
                </div>

                <div class="col-6">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Birth Day</label>
                        <input
                            type="date"
                            name="bod"
                            value="{{$student->bod}}"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                        />

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Age</label>
                        <input type="number" name="age" value="{{$student->age}}"  class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" value="{{$student->password}}"  class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" name="img" class="form-control" value="{{$student->img}}"  id="exampleInputPassword1"  />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Current Image</label>
                        <img src="{{asset('storage/'.$student->img)}}" class="card-img-top img-size-64" alt="profile_image">
                    </div>
                </div>
            </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
            <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Quick Example-->

@endsection

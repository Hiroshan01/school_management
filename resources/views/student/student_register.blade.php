@extends('app')
@push('title')
    Student Register | EDULanka
@endpush
@push('dash_title')
    Register Student
@endpush

@section('content')
    <div class="card card-primary card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header"><div class="card-title">Register Student</div></div>
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Student Register No</label>
                    <input
                        type="text"
                        name="reg_no"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                    />

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" />
                </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" />
                    </div>
                </div>

                <div class="col-6">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Birth Day</label>
                        <input
                            type="date"
                            name="bod"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                        />

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" name="img" class="form-control" id="exampleInputPassword1" />
                    </div>
                </div>
            </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Quick Example-->

@endsection
